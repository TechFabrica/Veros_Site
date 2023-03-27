<footer class="footer grid__container">
    <div class="footer__wrapper grid__item--4-12">

        <div class="footer__logo-container grid__item--3-3">
            <a href="<?php echo home_url(); ?>">
                <svg class="footer__logo-container-svg" width="182" height="80" viewBox="0 0 182 80" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_238_2192)"> <path d="M179.7 16.4C178.3 15 176.4 14.1 173.9 13.6L164.7 12.1C162.3 11.5 161.1 10.4 161.1 8.79995C161.1 8.59995 161.1 8.39995 161.2 8.29995C161.5 6.79995 162.9 5.79995 164.4 5.79995H170.2C172.4 5.79995 174.5 7.19995 175.2 9.29995C175.3 9.49995 175.3 9.69995 175.3 9.79995L181.3 8.59995C180.7 6.09995 179.3 3.99995 177.1 2.49995C174.8 0.899951 171.1 0.199951 167.7 0.199951C163.9 0.199951 159.8 1.09995 157.6 2.99995C155.7 4.59995 154.6 6.99995 154.7 9.49995C154.7 13.6 157.5 16.2999 162.9 17.4L171.5 18.7C174.2 19.3 175.6 20.5 175.6 22.2C175.6 23.4 175.1 24.2999 174 25C172.9 25.7 171.5 25.6 169.7 25.6C167.6 25.6 163.8 25.5999 162.5 24.7999C161.1 24 160.4 22.7 160.2 21.1L153.9 22.4C154.3 25.1999 155.7 27.4 158.2 28.9C160.7 30.4 164.4 31.1 168 31.1C171.9 31.1 176.2 30.3 178.5 28.6C180.8 26.9 182 24.6 182 21.6C181.8 19.5 181.1 17.7999 179.7 16.4Z" fill="#0C093C"/> <path d="M73.5 15.1C73.3 10.8 71.8 7.29998 68.9 4.49998C65.8 1.59998 62 0.0999756 57.4 0.0999756C52.9 0.0999756 49 1.59998 45.9 4.49998C42.8 7.39998 41.2 11.2 41.2 15.8C41.2 20.4 42.8 24.2 45.9 27.1C49 30 52.9 31.5 57.4 31.5C61.9 31.5 65.7 30 68.8 27.1C70.2 25.8 71.2 24.4 72 22.8L66.5 21.3C65.5 23.9 63 25.6 60.1 25.6H54.9C51 25.6 48 22.5 48 18.7V17.6H73.4L73.5 15.1ZM47.9 12.9C47.9 8.99998 51 5.99998 54.8 5.99998H60C63.9 5.99998 67 9.09997 67 12.9V13.2H47.9V12.9Z" fill="#0C093C"/> <path d="M91.5 5.39995V1.39995H85.5V31.2999H91.5V12.7C91.5 8.89995 93.4 7.19995 98.5 7.19995H104.9V1.19995H99.3C94 1.19995 92.1 3.99995 91.5 5.39995Z" fill="#0C093C"/> <path d="M18.8 24.9H15.3L6.5 1.19995H0L9.1 25.5C10.3 28.9 11.3 31.2 11.3 31.2H23.2C23.2 31.2 23.9 28.9 25.1 25.4L33.4 1.29995H27L18.8 24.9Z" fill="#0C093C"/> <path d="M135.1 26.9H122.9V32.7H135.1V26.9Z" fill="#7758D9"/> <path d="M141.25 16.3902L135.15 26.9554L140.172 29.8554L146.272 19.2902L141.25 16.3902Z" fill="#7758D9"/> <path d="M116.857 16.3618L111.835 19.2618L117.935 29.827L122.957 26.927L116.857 16.3618Z" fill="#7758D9"/> <path d="M135.1 0H122.9V5.8H135.1V0Z" fill="#7758D9"/> <path d="M140.146 2.88235L135.124 5.78235L141.224 16.3475L146.246 13.4475L140.146 2.88235Z" fill="#7758D9"/> <path d="M117.909 2.87609L111.809 13.4413L116.831 16.3413L122.931 5.77609L117.909 2.87609Z" fill="#7758D9"/> </g> <defs> <clipPath id="clip0_238_2192"> <rect width="181.8" height="79.5" fill="white"/> </clipPath> </defs> </svg>
            </a>
        </div>

        <div class="footer__nav">
            <nav class="footer__menu-container">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'footer',
                            'container' => '',
                            'theme_location' => 'footer',
                            'menu_class' => 'footer__menu',
                            'walker' => new footer_submenu_wrap()
                        )
                    ); 
                ?>
            </nav>
            
            <address class="footer__addresses">
                <div class="footer__menu-item footer__adresses-menu-item">
                    <a href="#">Contato</a>
                </div>
                
                <?php
                    $addresses_data = get_field('footer__addresses', 6);
                    foreach($addresses_data as $item):
                        ?>
                <p class="footer__address-title"><?php echo $item['footer__address-title']; ?></p>
                <a class="footer__address-support-container" href="<?php echo $item['footer__address-link']; ?>" target="_blank">
                    <?php 
                        $icon = $item['footer__address-icon'];
                        if( !empty( $icon ) ):
                            ?>
                    <img class="footer__address-icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                    <?php endif; ?>
                    <p class="footer__address-info"><?php echo $item['footer__address-info']; ?></p>
                </a>
                <?php endforeach; ?>
            </address>
        </div>
    </div>
    
    <div class="footer__institutional grid__item--4-12">
        
        <p class="footer__institutional-copyright"><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
        <div class="footer__institutional-menu">
            <a href="#" class="footer__institutional-menu-item button button--borderless">Política de Privacidade</a>
            <a href="#" class="footer__institutional-menu-item button button--borderless">Imprensa</a>
        </div>
        <div class="footer__institutional-social-container">
            <a href="#" class="footer__institutional-social">
                <svg class="footer__institutional-social-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_149_7086)"> <path d="M16 8.04902C16 3.60302 12.418 -0.000976562 8.00005 -0.000976562C3.58005 2.34375e-05 -0.00195312 3.60302 -0.00195312 8.05002C-0.00195312 12.067 2.92405 15.397 6.74805 16.001V10.376H4.71805V8.05002H6.75005V6.27502C6.75005 4.25802 7.94505 3.14402 9.77205 3.14402C10.648 3.14402 11.563 3.30102 11.563 3.30102V5.28102H10.554C9.56105 5.28102 9.25105 5.90202 9.25105 6.53902V8.04902H11.469L11.115 10.375H9.25005V16C13.074 15.396 16 12.066 16 8.04902Z" fill="#7758D9"/> </g> <defs> <clipPath id="clip0_149_7086"> <rect width="16" height="16" fill="white"/> </clipPath> </defs> </svg>
            </a>
            <a href="#" class="footer__institutional-social">
                <svg class="footer__institutional-social-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_149_7088)"> <path d="M8 0C5.829 0 5.556 0.01 4.703 0.048C3.85 0.088 3.269 0.222 2.76 0.42C2.22609 0.620819 1.74249 0.935826 1.343 1.343C0.936076 1.7427 0.621107 2.22624 0.42 2.76C0.222 3.268 0.087 3.85 0.048 4.7C0.01 5.555 0 5.827 0 8.001C0 10.173 0.01 10.445 0.048 11.298C0.088 12.15 0.222 12.731 0.42 13.24C0.625 13.766 0.898 14.212 1.343 14.657C1.787 15.102 2.233 15.376 2.759 15.58C3.269 15.778 3.849 15.913 4.701 15.952C5.555 15.99 5.827 16 8 16C10.173 16 10.444 15.99 11.298 15.952C12.149 15.912 12.732 15.778 13.241 15.58C13.7746 15.3791 14.2578 15.0641 14.657 14.657C15.102 14.212 15.375 13.766 15.58 13.24C15.777 12.731 15.912 12.15 15.952 11.298C15.99 10.445 16 10.173 16 8C16 5.827 15.99 5.555 15.952 4.701C15.912 3.85 15.777 3.268 15.58 2.76C15.3789 2.22623 15.0639 1.74268 14.657 1.343C14.2576 0.935676 13.774 0.620645 13.24 0.42C12.73 0.222 12.148 0.087 11.297 0.048C10.443 0.01 10.172 0 7.998 0H8.001H8ZM7.283 1.442H8.001C10.137 1.442 10.39 1.449 11.233 1.488C12.013 1.523 12.437 1.654 12.719 1.763C13.092 1.908 13.359 2.082 13.639 2.362C13.919 2.642 14.092 2.908 14.237 3.282C14.347 3.563 14.477 3.987 14.512 4.767C14.551 5.61 14.559 5.863 14.559 7.998C14.559 10.133 14.551 10.387 14.512 11.23C14.477 12.01 14.346 12.433 14.237 12.715C14.1087 13.0624 13.904 13.3764 13.638 13.634C13.358 13.914 13.092 14.087 12.718 14.232C12.438 14.342 12.014 14.472 11.233 14.508C10.39 14.546 10.137 14.555 8.001 14.555C5.865 14.555 5.611 14.546 4.768 14.508C3.988 14.472 3.565 14.342 3.283 14.232C2.9355 14.1039 2.62113 13.8996 2.363 13.634C2.09675 13.376 1.89172 13.0617 1.763 12.714C1.654 12.433 1.523 12.009 1.488 11.229C1.45 10.386 1.442 10.133 1.442 7.996C1.442 5.86 1.45 5.608 1.488 4.765C1.524 3.985 1.654 3.561 1.764 3.279C1.909 2.906 2.083 2.639 2.363 2.359C2.643 2.079 2.909 1.906 3.283 1.761C3.565 1.651 3.988 1.521 4.768 1.485C5.506 1.451 5.792 1.441 7.283 1.44V1.442ZM12.271 2.77C12.1449 2.77 12.0201 2.79483 11.9036 2.84308C11.7872 2.89132 11.6813 2.96203 11.5922 3.05118C11.503 3.14032 11.4323 3.24615 11.3841 3.36262C11.3358 3.4791 11.311 3.60393 11.311 3.73C11.311 3.85607 11.3358 3.9809 11.3841 4.09738C11.4323 4.21385 11.503 4.31968 11.5922 4.40882C11.6813 4.49797 11.7872 4.56868 11.9036 4.61692C12.0201 4.66517 12.1449 4.69 12.271 4.69C12.5256 4.69 12.7698 4.58886 12.9498 4.40882C13.1299 4.22879 13.231 3.98461 13.231 3.73C13.231 3.47539 13.1299 3.23121 12.9498 3.05118C12.7698 2.87114 12.5256 2.77 12.271 2.77ZM8.001 3.892C7.45607 3.8835 6.91489 3.98349 6.40898 4.18614C5.90306 4.3888 5.44251 4.69007 5.05415 5.07242C4.66579 5.45478 4.35736 5.91057 4.14684 6.41326C3.93632 6.91595 3.8279 7.4555 3.8279 8.0005C3.8279 8.5455 3.93632 9.08505 4.14684 9.58774C4.35736 10.0904 4.66579 10.5462 5.05415 10.9286C5.44251 11.3109 5.90306 11.6122 6.40898 11.8149C6.91489 12.0175 7.45607 12.1175 8.001 12.109C9.07954 12.0922 10.1082 11.6519 10.865 10.8833C11.6217 10.1146 12.0459 9.07917 12.0459 8.0005C12.0459 6.92183 11.6217 5.88641 10.865 5.11775C10.1082 4.34909 9.07954 3.90883 8.001 3.892ZM8.001 5.333C8.70833 5.333 9.38669 5.61399 9.88685 6.11415C10.387 6.61431 10.668 7.29267 10.668 8C10.668 8.70733 10.387 9.38569 9.88685 9.88585C9.38669 10.386 8.70833 10.667 8.001 10.667C7.29367 10.667 6.61531 10.386 6.11515 9.88585C5.61499 9.38569 5.334 8.70733 5.334 8C5.334 7.29267 5.61499 6.61431 6.11515 6.11415C6.61531 5.61399 7.29367 5.333 8.001 5.333Z" fill="#7758D9"/> </g> <defs> <clipPath id="clip0_149_7088"> <rect width="16" height="16" fill="white"/> </clipPath> </defs> </svg>
            </a>
            <a href="#" class="footer__institutional-social">
                <svg class="footer__institutional-social-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_149_7090)"> <path d="M0 1.146C0 0.513 0.526 0 1.175 0H14.825C15.474 0 16 0.513 16 1.146V14.854C16 15.487 15.474 16 14.825 16H1.175C0.526 16 0 15.487 0 14.854V1.146ZM4.943 13.394V6.169H2.542V13.394H4.943ZM3.743 5.182C4.58 5.182 5.101 4.628 5.101 3.934C5.086 3.225 4.581 2.686 3.759 2.686C2.937 2.686 2.4 3.226 2.4 3.934C2.4 4.628 2.921 5.182 3.727 5.182H3.743ZM8.651 13.394V9.359C8.651 9.143 8.667 8.927 8.731 8.773C8.904 8.342 9.299 7.895 9.963 7.895C10.832 7.895 11.179 8.557 11.179 9.529V13.394H13.58V9.25C13.58 7.03 12.396 5.998 10.816 5.998C9.542 5.998 8.971 6.698 8.651 7.191V7.216H8.635C8.64031 7.20765 8.64564 7.19932 8.651 7.191V6.169H6.251C6.281 6.847 6.251 13.394 6.251 13.394H8.651Z" fill="#7758D9"/> </g> <defs> <clipPath id="clip0_149_7090"> <rect width="16" height="16" fill="white"/> </clipPath> </defs> </svg>
            </a>
            <a href="#" class="footer__institutional-social">
                <svg class="footer__institutional-social-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_149_7092)"> <path d="M8.051 1.99902H8.14C8.962 2.00202 13.127 2.03202 14.25 2.33402C14.5895 2.42619 14.8989 2.60585 15.1472 2.85503C15.3955 3.10422 15.574 3.41421 15.665 3.75402C15.766 4.13402 15.837 4.63702 15.885 5.15602L15.895 5.26002L15.917 5.52002L15.925 5.62402C15.99 6.53802 15.998 7.39402 15.999 7.58102V7.65602C15.998 7.85002 15.989 8.76402 15.917 9.71602L15.909 9.82102L15.9 9.92502C15.85 10.497 15.776 11.065 15.665 11.483C15.5743 11.823 15.3958 12.1331 15.1475 12.3823C14.8991 12.6316 14.5896 12.8111 14.25 12.903C13.09 13.215 8.681 13.237 8.07 13.238H7.928C7.619 13.238 6.341 13.232 5.001 13.186L4.831 13.18L4.744 13.176L4.573 13.169L4.402 13.162C3.292 13.113 2.235 13.034 1.748 12.902C1.40849 12.8102 1.09907 12.6308 0.850724 12.3818C0.602383 12.1327 0.423847 11.8228 0.333 11.483C0.222 11.066 0.148 10.497 0.098 9.92502L0.09 9.82002L0.082 9.71602C0.0326476 9.03842 0.00529987 8.3594 0 7.68002L0 7.55702C0.002 7.34202 0.01 6.59902 0.064 5.77902L0.071 5.67602L0.074 5.62402L0.082 5.52002L0.104 5.26002L0.114 5.15602C0.162 4.63702 0.233 4.13302 0.334 3.75402C0.424694 3.41407 0.603162 3.10393 0.851513 2.85471C1.09986 2.60548 1.40937 2.42592 1.749 2.33402C2.236 2.20402 3.293 2.12402 4.403 2.07402L4.573 2.06702L4.745 2.06102L4.831 2.05802L5.002 2.05102C5.95371 2.0204 6.9058 2.0034 7.858 2.00002H8.051V1.99902ZM6.4 5.20902V10.027L10.557 7.61902L6.4 5.20902Z" fill="#7758D9"/> </g> <defs> <clipPath id="clip0_149_7092"> <rect width="16" height="16" fill="white"/> </clipPath> </defs> </svg>
            </a>
        </div>
    </div>
</footer>

</div> <!-- grid-supercontainer -->
<?php wp_footer(); ?>
</body>
</html>