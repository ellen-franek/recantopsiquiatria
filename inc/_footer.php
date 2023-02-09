<footer id="footer" class="footer">
    <div class="content-center">
        <div class="flex">
            <div class="redes-sociais">
                <a href="#" class="item-rs">
                    <img src="./dist/images/instagram.svg">
                </a>
                <a href="#" class="item-rs">
                    <img src="./dist/images/facebook.svg">
                </a>
                <a href="#" class="item-rs">
                    <img src="./dist/images/whatsapp.svg">
                </a>
            </div>
            <p>© 2021 - Grupo Recanto. Todos os direitos reservados. Desenvolvidos por <a target="_blank" href="https://www.agenciaopera.com.br/">Agência Ópera.</a></p>
        </div>
    </div>
</footer>

<script src="jquery.min.js"></script>
<script src="./dist/javascripts/carro.js"></script>
<script src="./dist/javascripts/vendor/vendor.js"></script>
<script src="./dist/javascripts/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.4.0/lightgallery.min.js" integrity="sha512-76iVPLEHY5kfZFCmHBQHLkcE4I2r+gK/I/HLYcm3iCuRO/hopAtyO3AFPCZy5B4347wQ7NftStUBVk/cR21MSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>(function(a,m,o,c,r,m){a[m]={id:"119872",hash:"1d18c678f5e801398a6cd262fb6a5a4eb45a058d9a8a063d52f4276d50d3afea",locale:"pt",inline:false,setMeta:function(p){this.params=(this.params||[]).concat([p])}};a[o]=a[o]||function(){(a[o].q=a[o].q||[]).push(arguments)};var d=a.document,s=d.createElement('script');s.async=true;s.id=m+'_script';s.src='https://gso.amocrm.com/js/button.js?1643199352';d.head&&d.head.appendChild(s)}(window,0,'amoSocialButton',0,0,'amo_social_button'));</script>

<script>
    $(document).ready(function() {
        App.init();
        lightGallery(document.getElementById('lightgalleryUM'), {
            thumbnail: false,
            selector: ".estrutura__images a"
        });
        lightGallery(document.getElementById('lightgalleryUF'), {
            thumbnail: false,
            selector: ".estrutura__images a"
        });
        lightGallery(document.getElementById('lightgalleryUDC'), {
            thumbnail: false,
            selector: ".estrutura__images a"
        });

    });
</script>

<style>
	.amo_animation_waves {
		opacity: 0 !important;
	}
</style>
<script>
	$(document).ready(function(){
		App.init();

		$('#atendimento-chat-online').on('click', function(){
        	$('.amo-livechat').trigger('click');
        	return false;
    	})
	});
</script>

</body>

</html>