export class DnaCard extends HTMLElement {

  constructor() {

    super();

  }  

  connectedCallback() {

    let imagem = this.getAttribute('img');
    let titulo = this.getAttribute('inputTitle');
    let conteudo = this.innerHTML;
    let botao = this.getAttribute('buttom')

    this.innerHTML = `
    <div class="card" style="width: 18rem;">
      <img src="${imagem}" alt="">
      <div class="card-body">
        <h5 class="card-title">${titulo}</h5>
        <p class="card-text">${conteudo}</p>
        <a href="#" class="btn btn-primary">${botao}</a>
      </div>
    </div>      `;
  }
}