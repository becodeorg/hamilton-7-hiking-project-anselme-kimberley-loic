// Declare an array object for our array of images
let arrayOfImages = [
    'https://images.unsplash.com/photo-1520962880247-cfaf541c8724?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3132&q=80'
];
const hike = document.getElementsByClassName('hike');
const img = document.getElementsByClassName('image');
const topi = document.getElementsByClassName('top');
console.log(img.length);
for(let i =0; i < img.length; i++){
    img[i].src = 'https://images.unsplash.com/photo-1520962880247-cfaf541c8724?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3132&q=80';
    img[i].classList.add("h-48", "w-full", "object-cover", "md:h-full", "md:w-48");
    topi[i].prepend(img[i])
}