const CACHE = 'pwabuilder-offline';

const offlineFallbackPage = 'index.html';

self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(CACHE).then(function(cache) {
            if (offlineFallbackPage === 'ToDo-replace-this-name.html') {
                return cache.add(
                    new Response(
                        'TODO: Update the value of the offlineFallbackPage constant in the serviceworker.'
                    )
                );
            }

            return cache.add(offlineFallbackPage);
        })
    );
});

self.addEventListener('fetch', function(event) {
    if (event.request.method !== 'GET') return;

    event.respondWith(
        fetch(event.request)
            .then(function(response) {
                event.waitUntil(updateCache(event.request, response.clone()));

                return response;
            })
            .catch(function(error) {
                return fromCache(event.request);
            })
    );
});

function fromCache(request) {
    return caches.open(CACHE).then(function(cache) {
        return cache.match(request).then(function(matching) {
            if (!matching || matching.status === 404) {
                return Promise.reject('no-match');
            }

            return matching;
        });
    });
}

function updateCache(request, response) {
    return caches.open(CACHE).then(function(cache) {
        return cache.put(request, response);
    });
}
