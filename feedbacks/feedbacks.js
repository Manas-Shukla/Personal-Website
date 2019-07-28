$("#input-id").rating();

// initialise feedback json
var parentDom = document.getElementById('root_wrapper');
var counter = -1;
const blockSize = 5;
feedbackJson = feedbackJson.sort((x, y) => {
    if (Number(x['rating']) > Number(y['rating'])) return -1;
    else return 1;
});
var filteredFeedbackJson = JSON.parse(JSON.stringify(feedbackJson));
updateContent(true);


function updateContent(flag) {
    parentDom.innerHTML = "";
    if(flag)counter++;
    else counter--;
    for (let i = Math.max(0,5 * counter); i < Math.min(5 * counter + 5, filteredFeedbackJson.length); i++) {
        let val = filteredFeedbackJson[i];
        var childDom = document.createElement('div');
        childDom.className = "speechbubble";
        var ratingSpan = '<span class="fa fa-star checked"></span>'.repeat(Number(val['rating']))
            +
            '<span class="fa fa-star"></span>'.repeat(5 - Number(val['rating']));
        var nameSpan = `<span class='username'>${val['name']}</span>`
        var comment = `<p>${val['comment']}`;
        childDom.innerHTML = ratingSpan + comment + nameSpan + '</p>';
        parentDom.appendChild(childDom);
    }
}

function onSearch(val) {
    val = val.trim().toLowerCase();
    counter = -1;
    filteredFeedbackJson = JSON.parse(JSON.stringify(feedbackJson.filter((x) => x['name'].toLowerCase().includes(val))));
    updateContent(true);
}

function prev() {
    if(counter>0) updateContent(false);
}
function next() {
    if(5*counter+5<filteredFeedbackJson.length)updateContent(true);
}