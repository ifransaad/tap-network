
const slider = document.querySelector('.slider-container'),
  slides = Array.from(document.querySelectorAll('.slide')),
  writeUpArray = Array.from(document.querySelectorAll('.slider-writeUp-writeUp')),
  navPointArray = Array.from(document.querySelectorAll('.slider-navPoint-Point')),
  navPoint = document.querySelector('.slider-navPoint')

  console.log(navPoint.children)

let isDragging = false,
  startPos = 0,
  currentTranslate = 0,
  prevTranslate = 0,
  animationID = 0,
  currentIndex = 0

slides.forEach((slide, index) => {
  const slideImage = slide.querySelector('img')
  // slideImage.addEventListener('dragstart', (e) => e.preventDefault())

  // Touch events
  slide.addEventListener('touchstart', touchStart(index))
  slide.addEventListener('touchend', touchEnd)
  slide.addEventListener('touchmove', touchMove)

})

// Disable context menu
// window.oncontextmenu = function (event) {
//   event.preventDefault()
//   event.stopPropagation()
//   return false
// }

function touchStart(index) {
  return function (event) {
    currentIndex = index
    startPos = getPositionX(event)
    isDragging = true

    // https://css-tricks.com/using-requestanimationframe/
    animationID = requestAnimationFrame(animation)
  }
}

function touchEnd() {
  isDragging = false
  cancelAnimationFrame(animationID)


  const movedBy = - currentTranslate + prevTranslate

  if (movedBy < -100 && currentIndex < slides.length - 1) currentIndex += 1

  if (movedBy > 100 && currentIndex > 0) currentIndex -= 1
    writeUpSelect(writeUpArray ,currentIndex)
    writeUpSelect(navPointArray, currentIndex)

  setPositionByIndex(currentIndex)

  writeUpSelect(slides, currentIndex)

}

function touchMove(event) {
  if (isDragging) {
    const currentPosition = getPositionX(event)
    currentTranslate = prevTranslate - currentPosition + startPos

    slides[currentIndex+1].classList.add('grabbing')

  }
}

function getPositionX(event) {
  return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX
}

function animation() {
  setSliderPosition()
  if (isDragging) requestAnimationFrame(animation)
}

function setSliderPosition() {
  slider.style.transform = `translateX(${currentTranslate}px)`
}

function setPositionByIndex(currentIndex) {
  currentTranslate = currentIndex * -window.innerWidth
  prevTranslate = currentTranslate
  setSliderPosition()
}

function writeUpSelect(array, currentIndex) {
  for (x in array){
    if (x == currentIndex ) {
      array[x].classList.add("active")
    }
    else{
      array[x].classList.remove("active")

    }
  }
  
}

navPoint.addEventListener('click', e=>{

  const navChild = Array.from(navPoint.children)

const targetLink = e.target.closest('li')
if (!targetLink) return;
const targetIndex = navChild.findIndex(x => x ===targetLink);

    writeUpSelect(writeUpArray ,targetIndex)
    writeUpSelect(navPointArray, targetIndex)
    writeUpSelect(slides, targetIndex)
    setPositionByIndex(targetIndex)



})


