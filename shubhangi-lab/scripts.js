document.addEventListener('DOMContentLoaded', function() {
    const doneButton = document.getElementById('doneButton');
    const dropdownContent = document.querySelector('.dropdown-content');
    const dropbtn = document.querySelector('.dropbtn');

    // Toggle dropdown visibility
    dropbtn.addEventListener('click', function() {
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    // Handle Done button click
    doneButton.addEventListener('click', function() {
        // Gather checked items
        const checkedTests = Array.from(document.querySelectorAll('.dropdown-content input:checked'))
            .map(checkbox => checkbox.parentElement.textContent.trim());

        // Hide dropdown
        dropdownContent.style.display = 'none';

        // Optionally, you can update a hidden field or other element with the selected tests
        // document.getElementById('selectedTests').value = checkedTests.join(', ');

        // Optionally, you could alert or log the selected tests for demonstration
        console.log('Selected tests:', checkedTests);
    });

    // Toggle mobile menu
    document.getElementById('js-navbar-toggle').addEventListener('click', function() {
        const menu = document.getElementById('js-menu');
        menu.classList.toggle('show');
    });
});
document.getElementById('seeMoreBtn').addEventListener('click', function() {
    var hiddenItems = document.querySelectorAll('.gallery-item.hidden');
    
    hiddenItems.forEach(function(item) {
        item.classList.remove('hidden');
    });

    this.style.display = 'none'; // Hide the "See More" button after clicking
});
