import './scss/main.scss';

import $ from 'jquery';
window.$ = $;
window.jQuery = $;

// TASK6
const getBooks = async () => {
  const wrapper = document.querySelector('#books');

  try {
    const response = await fetch('/wp-json/wp/v2/books?_embed&per_page=20');
    const books = await response.json();

    const necessaryData = books.map((book) => ({
      name: book.title.rendered,
      date: book.date,
      genre: book._embedded['wp:term'],
      excerpt: book.excerpt.rendered,
    }));

    necessaryData.forEach((book) => {
      const bookElement = document.createElement('div');
      bookElement.classList.add('book');
      bookElement.innerHTML = `
          <h2>${book.name}</h2>
          <p>${book.date}</p>
          <p>${book.genre ? book.genre[0].map((item) => item.name) : ''}</p>
          <p>${book.excerpt}</p>
        `;
      wrapper.append(bookElement);
    });
  } catch (error) {
    console.log(error);
  }
};

window.addEventListener('DOMContentLoaded', getBooks);
