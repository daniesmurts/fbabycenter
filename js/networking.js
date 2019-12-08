async function postWithCors(url, body) {
    return !body ? fetch(url, {
        method: 'POST',
        headers: {
            'idToken': getIdToken()
        },

    }) : fetch(url, {
        method: 'POST',
        headers: {
            'idToken': getIdToken(),
            'Content-Type': 'application/json',
        },
        body: body
    });
}

async function postWithoutCors(url, body) {
    return !body ? fetch(url, {
        method: 'POST',
        headers: {
            'idToken': getIdToken()
        },
        mode: 'no-cors',
    }) : fetch(url, {
        method: 'POST',
        headers: {
            'idToken': getIdToken()
        },
        body: body,
        mode: 'no-cors',
    });
}

async function getRequest(url) {
    return fetch(url, {
        method: 'GET',
        headers: {
            // 'Content-Type': 'application/json',
            'idToken': getIdToken()
        },
    });
}

function getIdToken() {
    return getCookie('idToken');
}

function saveCookie(token) {
    var date = new Date();
    //Cookie expires in 24 hours
    date.setTime(date.getTime() + 24 * 3600 * 1000);
    document.cookie = 'idToken=' + token + '; expires=' + date.toUTCString() + '; path=/';
    return;
}

function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}

BASE_URL = 'https://baby-arcade-debug.herokuapp.com/api';
productCreateEndpoint = BASE_URL + '/admin/protected/products/create';
loginEndpoint = BASE_URL + '/admin/site/login';
bannersEndpoint = BASE_URL + '/admin/protected/banners';
ordersEndpoint = BASE_URL + '/admin/protected/orders';
pickupEndpoint = BASE_URL + '/admin/protected/pickup-stations';
shopsEndpoint = BASE_URL + '/admin/protected/shops';
categoriesEndpoint = BASE_URL + '/admin/protected/categories';
productsEndpoint = BASE_URL + '/admin/protected/products';
