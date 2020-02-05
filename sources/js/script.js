const div = document.getElementById('content1');
const article = document.getElementById('container1')
const title = document.getElementById('title1')

let green = false


div.addEventListener('click', function()
{
    green = !green
    if (green == true) 
    {
        container1.style.opacity = '1'
        title.style.opacity = '0'
    }
    else 
    {
        container1.style.opacity = '0'
        title.style.opacity = '1'
    }
});

const div2 = document.getElementById('content2');
const article2 = document.getElementById('container2')
const title2 = document.getElementById('title2')

let grey = false


div2.addEventListener('click', function()
{
    grey = !grey
    if (grey == true) 
    {
        container2.style.opacity = '1'
        title2.style.opacity = '0'
    }
    else 
    {
        container2.style.opacity = '0'
        title2.style.opacity = '1'
    }
});

const div3 = document.getElementById('content');
const article3 = document.getElementById('container')
const title3 = document.getElementById('title')

let pink = false


div3.addEventListener('click', function()
{
    pink = !pink
    if (pink == true) 
    {
        article3.style.opacity = '1'
        title3.style.opacity = '0'
    }
    else 
    {
        article3.style.opacity = '0'
        title3.style.opacity = '1'
    }
});
