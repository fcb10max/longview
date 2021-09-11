const firstComment = document.getElementById('firstReview');
const secondComment = document.getElementById('secondReview');
const thirdComment = document.getElementById('thirdReview');

const firstSelector = document.getElementById('selector1');
const secondSelector = document.getElementById('selector2');
const thirdSelector = document.getElementById('selector3');

function changeComment(defaultComment, changeToComment) {
    if (defaultComment.id=='firstReview' && changeToComment.id=='secondReview') {
        defaultComment.style.left = '-100%';
        defaultComment.style.opacity = '0';
        defaultComment.classList.add('hidden');
        changeToComment.style.left = '0';
        changeToComment.style.opacity = '1';
        changeToComment.classList.remove('hidden');
    } else if (defaultComment.id=='firstReview' && changeToComment.id=='thirdReview') {
        defaultComment.style.left = '-100%';
        defaultComment.style.opacity = '0';
        defaultComment.classList.add('hidden');
        secondComment.style.left = '-100%';
        changeToComment.style.left = '0';
        changeToComment.style.opacity = '1';
        changeToComment.classList.remove('hidden');
    } else if (defaultComment.id=='secondReview' && changeToComment.id=='firstReview') {
        defaultComment.style.left = '100%';
        defaultComment.style.opacity = '0';
        defaultComment.classList.add('hidden');
        changeToComment.style.left = '0';
        changeToComment.style.opacity = '1';
        changeToComment.classList.remove('hidden');
    } else if (defaultComment.id=='secondReview' && changeToComment.id=='thirdReview') {
        defaultComment.style.left = '-100%';
        defaultComment.classList.add('hidden');
        defaultComment.style.opacity = '0';
        changeToComment.style.left = '0';
        changeToComment.style.opacity = '1';
        changeToComment.classList.remove('hidden');
    } else if (defaultComment.id=='thirdReview' && changeToComment.id=='firstReview') {
        defaultComment.style.left = '100%';
        defaultComment.style.opacity = '0';
        defaultComment.classList.add('hidden');
        secondComment.style.left = '-100%';
        changeToComment.style.left = '0';
        changeToComment.style.opacity = '1';
        changeToComment.classList.remove('hidden');
    } else if (defaultComment.id=='thirdReview' && changeToComment.id=='secondReview') {
        defaultComment.style.left = '100%';
        defaultComment.classList.add('hidden');
        defaultComment.style.opacity = '0';
        changeToComment.style.left = '0%';
        changeToComment.style.opacity = '1';
        changeToComment.classList.remove('hidden');
    }
} 

firstSelector.onclick = () => {
    if (!firstSelector.classList.contains('selected')) {
        if (secondSelector.classList.contains('selected')) {
            secondSelector.classList.remove('selected');
            firstSelector.classList.add('selected');
            changeComment(secondComment, firstComment);
        } else if (thirdSelector.classList.contains('selected')) {
            thirdSelector.classList.remove('selected');
            firstSelector.classList.add('selected');
            changeComment(thirdComment, firstComment);
        }
    }
};

secondSelector.onclick = () => {
    if (!secondSelector.classList.contains('selected')) {
        if (firstSelector.classList.contains('selected')) {
            firstSelector.classList.remove('selected');
            secondSelector.classList.add('selected');
            changeComment(firstComment, secondComment);
        } else if (thirdSelector.classList.contains('selected')) {
            thirdSelector.classList.remove('selected');
            secondSelector.classList.add('selected');
            changeComment(thirdComment, secondComment);
        }
    }
};

thirdSelector.onclick = () => {
    if (!thirdSelector.classList.contains('selected')) {
        if (firstSelector.classList.contains('selected')) {
            firstSelector.classList.remove('selected');
            thirdSelector.classList.add('selected');
            changeComment(firstComment, thirdComment);
        } else if (secondSelector.classList.contains('selected')) {
            secondSelector.classList.remove('selected');
            thirdSelector.classList.add('selected');
            changeComment(secondComment, thirdComment);
        }
    }
};