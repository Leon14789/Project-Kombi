<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="logo">
            <img src="/assets/images/logo.png" alt="Logo da Empresa" />
        </div>
        <div class="social-icons">
            <a href="#" class="social" onclick="openModal('instagramModal')">
                <img class="social-icon" src="/assets/images/icons/instagram.svg" alt="Instagram" />
            </a>
            <a href="#" class="social" onclick="openModal('facebookModal')">
                <img class="social-icon" src="/assets/images/icons/facebook.svg" alt="Facebook" />
            </a>
        </div>
    </div>
    <hr class="hrFooter">
    <div class="footer-bottom">
        <p>© 2024 Lorem Ipsum - 12.345.678/0001-00. Todos os direitos reservados. <a class="link-footer" href="#" onclick="openModal('cookiesModal')">Políticas de Cookies</a>. Desenvolvido por Agência Kombi</p>
    </div>
</footer>

<!-- Modais -->
<div id="instagramModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('instagramModal')">&times;</span>
        <h2>Instagram</h2>
        <p>Conteúdo do modal para Instagram.</p>
    </div>
</div>

<div id="facebookModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('facebookModal')">&times;</span>
        <h2>Facebook</h2>
        <p>Conteúdo do modal para Facebook.</p>
    </div>
</div>

<div id="cookiesModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('cookiesModal')">&times;</span>
        <h2>Política de Cookies</h2>
        <p>Conteúdo do modal para a política de cookies.</p>
    </div>
</div>


