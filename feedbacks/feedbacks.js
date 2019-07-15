$("#input-id").rating();


var parentDom = document.getElementById('root_wrapper');
feedbackJson = feedbackJson.sort((x,y)=> {
    if(Number(x['rating']) > Number(y['rating']))return -1;
    else return 1;
});

feedbackJson.forEach((val) => {
    var childDom = document.createElement('div');
    childDom.className = "speechbubble";
    var ratingSpan = '<span class="fa fa-star checked"></span>'.repeat(Number(val['rating']))
        +
        '<span class="fa fa-star"></span>'.repeat(5 - Number(val['rating']));
    var nameSpan = `<span class='username'>${val['name']}</span>`
    var comment = `<p>${val['comment']}`;
    childDom.innerHTML = ratingSpan + comment + nameSpan + '</p>';
    parentDom.appendChild(childDom);
})

