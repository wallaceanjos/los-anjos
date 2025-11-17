<!-- Post -->
<style>
    .blog-item {
        padding: 48px 0;
    }
    .blog-item img {
        border-radius: 16px;
    }
    .blog-item h1{
        font-size: 44px;
        line-height: 48px;
        font-weight: 700;
    }
    .blog-item h2{
        font-size: 40px;
        line-height: 44px;
        font-weight: 700;
    }
    .blog-item h3{
        font-size: 36px;
        line-height: 40px;
        font-weight: 700;
    }
    .blog-item h4{
        font-size: 32px;
        line-height: 36px;
        font-weight: 700;
    }
    .blog-item h5{
        font-size: 28px;
        line-height: 32px;
        font-weight: 700;
    }
    .blog-item h6 {
        font-size: 24px;
        line-height: 28px;
        font-weight: 700;
    }
    .blog-item p {
        font-size: 18px;
        line-height: 32px;
    }
    
    /* Social Share Bar Styles */
    .social-share-bar {
        padding: 24px 0;
        border-top: 1px solid #e4e4e4;
        border-bottom: 1px solid #e4e4e4;
    }
    
    .social-share-bar .gap-16 {
        gap: 16px;
    }
    
    .social-share-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background-color: #f7f7f7;
        color: #232323;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        position: relative;
    }
    
    .social-share-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    
    .social-share-btn span {
        font-size: 24px;
        line-height: 1;
    }
    
    .social-share-btn.facebook:hover {
        background-color: #1877f2;
        color: #ffffff;
    }
    
    .social-share-btn.twitter:hover,
    .social-share-btn.x:hover {
        background-color: #000000;
        color: #ffffff;
    }
    
    .social-share-btn.instagram:hover {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        color: #ffffff;
    }
    
    .social-share-btn.whatsapp:hover {
        background-color: #25d366;
        color: #ffffff;
    }
    
    .social-share-btn.telegram:hover {
        background-color: #0088cc;
        color: #ffffff;
    }
    
    .social-share-btn.linkedin:hover {
        background-color: #0077b5;
        color: #ffffff;
    }
    
    .social-share-btn.tiktok:hover {
        background-color: #000000;
        color: #ffffff;
    }
    
    .social-share-btn.youtube:hover {
        background-color: #ff0000;
        color: #ffffff;
    }
    
    .social-share-btn.copy-link:hover {
        background-color: #4d21fc;
        color: #ffffff;
    }
    
    .social-share-btn.copy-link.copied {
        background-color: #25d366;
        color: #ffffff;
    }
    
    @media (max-width: 767px) {
        .social-share-bar .gap-16 {
            gap: 12px;
        }
        
        .social-share-btn {
            width: 44px;
            height: 44px;
        }
        
        .social-share-btn span {
            font-size: 20px;
        }
        
        .social-share-bar span.text-uppercase {
            width: 100%;
            text-align: center;
            margin-bottom: 16px;
            margin-right: 0 !important;
        }
    }
    
</style>
<div class="blog-item alt-font flex-column gap-48 background-surface">

    <!-- Text -->
    <div class="flex-column flex-align-center px-16">
        <h4 class="text-center">
            <?php the_title(); ?>
        </h4>
        <?php the_content(); ?>
    </div>
    <!-- End Text -->

    <!-- Social Share Bar -->
    <div class="social-share-bar margin-40px-top margin-40px-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-center gap-16">
                        <span class="text-uppercase alt-font font-weight-600 margin-15px-right">Compartilhar:</span>
                        <?php
                            $post_url = urlencode(get_permalink());
                            $post_title = urlencode(get_the_title());
                            $post_excerpt = urlencode(wp_trim_words(get_the_excerpt(), 20));
                            $post_image = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
                        ?>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="social-share-btn facebook"
                           title="Compartilhar no Facebook"
                           aria-label="Compartilhar no Facebook">
                            <span class="i-matcha-facebook"></span>
                        </a>
                        
                        <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="social-share-btn twitter"
                           title="Compartilhar no Twitter/X"
                           aria-label="Compartilhar no Twitter/X">
                            <span class="i-matcha-x"></span>
                        </a>
                        
                        <a href="https://www.instagram.com/" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="social-share-btn instagram"
                           title="Compartilhar no Instagram"
                           aria-label="Compartilhar no Instagram">
                            <span class="i-matcha-instagram"></span>
                        </a>
                        
                        <a href="https://wa.me/?text=<?php echo $post_title . ' ' . $post_url; ?>" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="social-share-btn whatsapp"
                           title="Compartilhar no WhatsApp"
                           aria-label="Compartilhar no WhatsApp">
                            <span class="i-matcha-whatsapp"></span>
                        </a>
                        
                        <a href="https://t.me/share/url?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="social-share-btn telegram"
                           title="Compartilhar no Telegram"
                           aria-label="Compartilhar no Telegram">
                            <span class="i-matcha-telegram"></span>
                        </a>
                        
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="social-share-btn linkedin"
                           title="Compartilhar no LinkedIn"
                           aria-label="Compartilhar no LinkedIn">
                            <span class="i-matcha-share"></span>
                        </a>
                        
                        <a href="https://www.tiktok.com/" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="social-share-btn tiktok"
                           title="Compartilhar no TikTok"
                           aria-label="Compartilhar no TikTok">
                            <span class="i-matcha-tiktok"></span>
                        </a>
                        
                        <a href="https://www.youtube.com/" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="social-share-btn youtube"
                           title="Compartilhar no YouTube"
                           aria-label="Compartilhar no YouTube">
                            <span class="i-matcha-youtube"></span>
                        </a>
                        
                        <button type="button" 
                                class="social-share-btn copy-link"
                                onclick="copyToClipboard('<?php echo esc_js(get_permalink()); ?>', this)"
                                title="Copiar link"
                                aria-label="Copiar link">
                            <span class="i-matcha-copy"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Social Share Bar -->

    <!-- Comments -->
    <?php if (comments_open() || get_comments_number()) : ?>
        <div class="d-flex-column">
            <?php comments_template(); ?>
        </div>
    <?php endif; ?>
    <!-- End Comments -->
    
    <div class="w-50-p h-4 background-bg radius-16 mx-auto"></div>
    
    <!-- Prev/Next Post -->
    <div class="d-flex flex-space-around">
        <?php $prev_post = get_previous_post(); ?>
        <?php if (!empty($prev_post)): ?>
            <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" class="btn btn-large btn-dark-purple d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr"><i class="fa fa-arrow-left left-icon"></i><?php echo 'Publicação anterior'; ?></a>
        <?php endif; ?>

        <?php $next_post = get_next_post(); ?>
        <?php if (!empty($next_post)): ?>
            <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" class="btn btn-large btn-dark-purple d-table d-lg-inline-block lg-margin-15px-bottom md-margin-auto-lr"><?php echo 'Proxima publicação'; ?><i class="fas fa-arrow-right right-icon"></i></a>
        <?php endif; ?>
    </div>
    <!-- End Prev/Next Post -->
</div>
<!-- End Post -->

<script>
function copyToClipboard(text, button) {
    // Usar a API moderna do Clipboard se disponível
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(text).then(function() {
            // Feedback visual
            if (button) {
                const originalClass = button.className;
                button.classList.add('copied');
                button.setAttribute('title', 'Link copiado!');
                
                setTimeout(function() {
                    button.className = originalClass;
                    button.setAttribute('title', 'Copiar link');
                }, 2000);
            }
        }).catch(function(err) {
            console.error('Erro ao copiar link:', err);
            fallbackCopy(text, button);
        });
    } else {
        // Fallback para navegadores mais antigos
        fallbackCopy(text, button);
    }
}

function fallbackCopy(text, button) {
    // Criar um elemento temporário para copiar o texto
    const tempInput = document.createElement('input');
    tempInput.value = text;
    tempInput.style.position = 'fixed';
    tempInput.style.opacity = '0';
    document.body.appendChild(tempInput);
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // Para dispositivos móveis
    
    try {
        // Copiar o texto
        const successful = document.execCommand('copy');
        document.body.removeChild(tempInput);
        
        if (successful) {
            // Feedback visual
            if (button) {
                const originalClass = button.className;
                button.classList.add('copied');
                button.setAttribute('title', 'Link copiado!');
                
                setTimeout(function() {
                    button.className = originalClass;
                    button.setAttribute('title', 'Copiar link');
                }, 2000);
            }
        } else {
            throw new Error('Falha ao copiar');
        }
    } catch (err) {
        console.error('Erro ao copiar link:', err);
        document.body.removeChild(tempInput);
        alert('Erro ao copiar link. Por favor, copie manualmente: ' + text);
    }
}
</script>




