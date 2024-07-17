import { form, inputMask, preloader } from "./seletores.js";
import { modal, atualizaForm } from "./setOrcamento.js";
import { headerScrolled, toggleBacktotop, handleInput, scrollToHash, } from "./utils.js";
let itensOrcamento = {};
window.addEventListener("load", () => {
    headerScrolled();
    toggleBacktotop();
    scrollToHash();
    const listaAtualizada = atualizaListaOrcamento();
    if (form)
        atualizaForm(listaAtualizada);
    preloader?.remove();
    inputMask?.forEach((input) => {
        input.addEventListener("input", handleInput, false);
    });
});
document.addEventListener("scroll", () => {
    headerScrolled();
    toggleBacktotop();
});
window.setQuote = (id, produto) => {
    atualizaListaOrcamento();
    itensOrcamento[id] = produto;
    localStorage.setItem("orcamento", JSON.stringify(itensOrcamento));
    if (form)
        atualizaForm(itensOrcamento);
    modal(id, itensOrcamento);
};
export function atualizaListaOrcamento() {
    itensOrcamento = {};
    const recuperarItens = localStorage.getItem("orcamento");
    if (recuperarItens) {
        itensOrcamento = JSON.parse(recuperarItens);
    }
    return itensOrcamento;
}
//# sourceMappingURL=script.js.map