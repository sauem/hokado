const axiosCatch = (error) => {
    if (error.response) {
        // The request was made and the server responded with a status code
        // that falls out of the range of 2xx
        console.error('Response data', error.response.data);
        console.error('Response status', error.response.status);
        console.error('Response header', error.response.headers);
        const {data} = error.response;
        let msg = data.message;
        if (typeof msg === 'undefined' && Array.isArray(data)) {
            msg = data[0].message;
        }
        throw {
            data: error.response.data,
            message: msg,
        };
    } else if (error.request) {
        // The request was made but no response was received
        // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
        // http.ClientRequest in node.js
        console.error('Request', error.request);
        throw {
            message: error.message,
        };
    } else {
        // Something happened in setting up the request that triggered an Error
        console.error('Error', error.message);
        throw {
            message: error.message,
        };
    }
};
const Server = axios.create({
    baseURL : '',
    headers: {
        'Content-Type': 'application/json',
    },
});
