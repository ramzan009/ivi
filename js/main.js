let dropdown = document.querySelectorAll('.dropdown');
for (let block of dropdown) {

    let blockShow = block.querySelector('.block_show');

    block.addEventListener("mouseover", function(e) {
        blockShow.classList.add('block_show_open');
    })
}


document.addEventListener("mouseover", function(e) {

    if (isBlockBox(e.target) ||
        e.target.classList.contains('inside') ||
        e.target.classList.contains('menu')) {
        return;
    }


    if (e.target.classList.contains('dropdown') ||
        e.target.classList.contains('dropdown-link')) {
        closeDropdowns();
        e.target.nextElementSibling.classList.add('block_show_open');
        return;
    }

    closeDropdowns();
})

function closeDropdowns() {
    let dropdown = document.querySelectorAll('.dropdown');
    for (let block of dropdown) {
        let blockShow = block.querySelector('.block_show');
        blockShow.classList.remove('block_show_open');
    }
}

function isBlockBox(e) {
	if (e === null) {
		return false;
	}

    if (e?.parentElement == document.body) {
        return false;
    } else if (e?.parentElement?.classList.contains('block_show')) {
        return true;
    } else {
        return isBlockBox(e.parentElement);
    }
}




let group = document.querySelector('.group');
let modal = document.querySelector('.modal');
let item_modal = document.querySelector('.item_modal');
let close_block = document.querySelector('.close_block');

group.addEventListener("click", function(e) {
    e.preventDefault();
    modal.classList.add("modal_open");
})

close_block.addEventListener("click", function(e) {
    modal.classList.remove("modal_open");
})
