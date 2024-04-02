const botaoAdicionarPizza=document.querySelectorAll(".cards-area__botao-add");
console.log(botaoAdicionarPizza);
const modal=document.querySelector(".bkg-modal");
const botaoCancelar=document.querySelector(".botao--vermelho");
const botaoplus=document.querySelector(".fa-plus");

for (let i = 0; i < botaoAdicionarPizza.length; i++) {
    botaoAdicionarPizza[i].addEventListener('click',()=>{
        console.log("clicaram no botão");
        modal.classList.add("bkg-modal--ativo");
    })
}

botaoCancelar.addEventListener('click',()=>{
    modal.classList.remove("bkg-modal--ativo");
})

let count = 0
const btnadc = document.getElementById("count")

function contar() {
    count++
    botaoplus.textContent = count
}