const upArrow = document.querySelector('.up-button');
const downArrow = document.querySelector('.down-button');

const link = Array.from(document.querySelector('.sec2LabelLink').children)
const linkNav = document.querySelector('.sec2LabelLink');

const imageSlider = document.querySelector('.displayBoxImageAgain');
const image = Array.from(imageSlider.children);

const writeUpSlider = document.querySelector('.displayBoxWriteUpAgain');
const writeUp = Array.from(writeUpSlider.children);


const imageHeight = image[0].getBoundingClientRect().height;
const writeUpHeight = writeUp[0].getBoundingClientRect().height;

const setImagePosition = (image, index) => {

    image.style.top = imageHeight  * index + 'px';

};
const setwriteUpPosition = (writeUp, index) => {

    writeUp.style.top = writeUpHeight  * index + 'px';

};

image.forEach(setImagePosition);
writeUp.forEach(setwriteUpPosition)


const moveToSlideImage = (imageSlider, currentImage, targetImage) => {
    imageSlider.style.transform = 'translateY(-' + targetImage.style.top  + ')';
    currentImage.classList.remove('current-image');
    currentImage.classList.add('vanish-image');
    targetImage.classList.add('current-image');
    targetImage.classList.remove('vanish-image');
}
const moveToSlideWriteUp = (imageSlider, currentWriteUp, targetWriteUp) => {
    imageSlider.style.transform = 'translateY(-' + targetWriteUp.style.top  + ')';
    currentWriteUp.classList.remove('current-image');
    targetWriteUp.classList.add('current-image');
    currentWriteUp.classList.add('vanish-image');
    targetWriteUp.classList.remove('vanish-image');

}



upArrow.addEventListener('click', e =>{
    const currentImage = imageSlider.querySelector('.current-image');
    const nextImage = currentImage.nextElementSibling;

    const currentWriteUp = writeUpSlider.querySelector('.current-image');
    const nextWriteUp = currentWriteUp.nextElementSibling;

    moveToSlideImage(imageSlider, currentImage, nextImage);
    moveToSlideWriteUp(writeUpSlider, currentWriteUp, nextWriteUp);


})

downArrow.addEventListener('click', e =>{
    const currentImage = imageSlider.querySelector('.current-image');
    const prevImage = currentImage.previousElementSibling;

    const currentWriteUp = writeUpSlider.querySelector('.current-image');
    const prevWriteUp = currentWriteUp.previousElementSibling;

    moveToSlideImage(imageSlider, currentImage, prevImage);
    moveToSlideWriteUp(writeUpSlider, currentWriteUp, prevWriteUp);


})

linkNav.addEventListener('click', e =>{

const    targetLink = e.target.closest('li');
if (!targetLink) return;

const currentLink = linkNav.querySelector('.current-image');
const targetIndex = link.findIndex(x => x ===targetLink);

const currentImage = imageSlider.querySelector('.current-image');
const targetImage = image[targetIndex];

const currentWriteUp = writeUpSlider.querySelector('.current-image');
const targetWriteUp = writeUp[targetIndex];




moveToSlideImage(imageSlider, currentImage, targetImage);
moveToSlideWriteUp(writeUpSlider, currentWriteUp, targetWriteUp);


console.log(targetImage)
console.log(targetWriteUp)

})









