CSS BEM + SASS

    BEM

        Block
            Uma entidade independente significativa por si só.

        Element
            Uma parte do block que não tem signicado independente e que está semanticamente atrelada ao block.

        Modifier
            Um marcador em um block ou element que altera sua aparência ou comportamento.

        
        Utilizar também para a estruturação dos arquivos:
            - Cada bloco terá uma pasta individual com subpastas para elementos, e esses, subpastas para os modificadores. Os arquivos SCSS de cada BEM ficará em sua pasta individual para facilitar a manutenção e deverá ser importado no arquivo pai.
            - Cada tipo de página contará com um arquivo SCSS único, que irá conter os @imports necessários para a página.


    Estrutura

        page
            header
                logo
                menu
                    menu_item
                button
            hero
                hero__title
                hero__content
                button
                button
            

    SASS
    
        Compilar com Gulp


Sugestão


menu-login
    menu-login__item
nav-section
    logo
    menu
        menu__item *4
    nav-section__search
    nav-section__phone-button
hero
    hero__background
    hero__title
    hero__content
    button button--square *3
        button__icon
        button__text
    hero__button--whatsapp
content-section
    content-section__title
    content-section__content
    menu content-section__menu
        menu__item *4
    content-section__card--big
        content-section__thumb--big
        content-section__subtitle
        content-section__content
        content-section__checklist
    button button--round
        button__text
content-section
    content-section__title
    content-section__content
    content-section__link
    button button--square--big
        button__icon
        button__text
content-section content-section--div2 content-section--purple
    content-section__title
    content-section__content
    content-section__image
content-section content-section--div2
    content-section__card *4
        content-section__title
        content-section__content
        content-section__thumb
testimony-section


PRÓXIMOS PASSOS

    SASS:

    configurar biblioteca de cores com variáveis
    criar blocos e configurar biblioteca de fontes
    criar nav-menu do topo da home
    estruturar grid desktop e mobile (criar mixins para os columns spans)


320px — 480px: Mobile devices
481px — 768px: iPads, Tablets
769px — 1024px: Small screens, laptops
1025px — 1200px: Desktops, large screens
1201px and more —  Extra large screens, TV

resoluções mais utilizadas (https://gs.statcounter.com/screen-resolution-stats):

    mobile - 58.52%

        412 e 414px - 29,04%
        360px - 16.48%
        393px - 9.18%
        385px - 3.84%
        375px - 2.78%
        desconhecido / outros - 36.68%


    desktop - 39.41%

        1360 e 1366px - 32.81%
        1920px - 28.78%
        1536px - 8.58%
        1280px - 5.87%
        1440px - 4.28%
        1600px - 3.65%
        1024px - 1.84%
        desconhecido / outros - 14.19%


    tablet - 2.07%

        768px - 17.05%
        800 e 810px - 14.9%
        600 e 601px - 12.21%
        1280px - 4.71%
        1334px - 4.06%
        962px - 3.72%
        desconhecido / outros - 43.35%


    geral:

        320px — 480px: 37.05% 
        481px — 768px: 0.06%
        769px — 1024px: 1.1%
        1025px — 1200px: 0%
        1201px and more —  34.66%
        desconhecido / outros - 27.13%

        até 480px
        de 481px a 1023px
        de 1024px a 1279px
        de 1280px em diante
        (opcional a partir de 1600px)

        