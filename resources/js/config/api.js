// const location = document.location.origin + '/';
const location = base_url + '/';
const json_path = location + 'json/';
const user = json_path + 'user/';
const api = {
    getThanas : json_path + 'get-upazilas/',
};
export default api;
