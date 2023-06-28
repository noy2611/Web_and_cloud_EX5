
document.addEventListener('DOMContentLoaded', function() {
  const categoryDropdown = document.getElementById('categoryDropdown');
  const books = Array.from(document.getElementsByClassName('book'));

  categoryDropdown.addEventListener('change', function() {
    const selectedCategory = categoryDropdown.value;
    filterBooks(selectedCategory);
  });

  function filterBooks(category) {
    books.forEach(book => {
      const bookCategory = book.dataset.category;
      if (category === '' || bookCategory === category) {
        book.parentNode.style.display = 'block';
      } else {
        book.parentNode.style.display = 'none';
      }
    });
  }
});


