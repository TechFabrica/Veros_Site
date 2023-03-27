<section class="newsletter grid__container">
    <div class="newsletter__left-wrapper grid__item--4-6 grid__container grid__container--left grid__container--no-padding">
        <div class="newsletter__icon-container">
            <svg class="newsletter__icon grid__item--4-1" width="63" height="62" viewBox="0 0 63 62" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19.6875 15.5C19.1654 15.5 18.6646 15.7041 18.2954 16.0675C17.9262 16.4308 17.7188 16.9236 17.7188 17.4375C17.7188 17.9514 17.9262 18.4442 18.2954 18.8075C18.6646 19.1709 19.1654 19.375 19.6875 19.375H43.3125C43.8346 19.375 44.3354 19.1709 44.7046 18.8075C45.0738 18.4442 45.2812 17.9514 45.2812 17.4375C45.2812 16.9236 45.0738 16.4308 44.7046 16.0675C44.3354 15.7041 43.8346 15.5 43.3125 15.5H19.6875ZM17.7188 25.1875C17.7188 24.6736 17.9262 24.1808 18.2954 23.8175C18.6646 23.4541 19.1654 23.25 19.6875 23.25H43.3125C43.8346 23.25 44.3354 23.4541 44.7046 23.8175C45.0738 24.1808 45.2812 24.6736 45.2812 25.1875C45.2812 25.7014 45.0738 26.1942 44.7046 26.5575C44.3354 26.9209 43.8346 27.125 43.3125 27.125H19.6875C19.1654 27.125 18.6646 26.9209 18.2954 26.5575C17.9262 26.1942 17.7188 25.7014 17.7188 25.1875ZM19.6875 31C19.1654 31 18.6646 31.2041 18.2954 31.5675C17.9262 31.9308 17.7188 32.4236 17.7188 32.9375C17.7188 33.4514 17.9262 33.9442 18.2954 34.3075C18.6646 34.6709 19.1654 34.875 19.6875 34.875H43.3125C43.8346 34.875 44.3354 34.6709 44.7046 34.3075C45.0738 33.9442 45.2812 33.4514 45.2812 32.9375C45.2812 32.4236 45.0738 31.9308 44.7046 31.5675C44.3354 31.2041 43.8346 31 43.3125 31H19.6875ZM19.6875 38.75C19.1654 38.75 18.6646 38.9541 18.2954 39.3175C17.9262 39.6808 17.7188 40.1736 17.7188 40.6875C17.7188 41.2014 17.9262 41.6942 18.2954 42.0575C18.6646 42.4209 19.1654 42.625 19.6875 42.625H31.5C32.0221 42.625 32.5229 42.4209 32.8921 42.0575C33.2613 41.6942 33.4688 41.2014 33.4688 40.6875C33.4688 40.1736 33.2613 39.6808 32.8921 39.3175C32.5229 38.9541 32.0221 38.75 31.5 38.75H19.6875Z" fill="#7758D9"/> <path d="M7.875 7.75C7.875 5.69457 8.70468 3.72333 10.1815 2.26992C11.6584 0.816516 13.6614 0 15.75 0L47.25 0C49.3386 0 51.3416 0.816516 52.8185 2.26992C54.2953 3.72333 55.125 5.69457 55.125 7.75V54.25C55.125 56.3054 54.2953 58.2767 52.8185 59.7301C51.3416 61.1835 49.3386 62 47.25 62H15.75C13.6614 62 11.6584 61.1835 10.1815 59.7301C8.70468 58.2767 7.875 56.3054 7.875 54.25V7.75ZM47.25 3.875H15.75C14.7057 3.875 13.7042 4.28326 12.9658 5.00996C12.2273 5.73666 11.8125 6.72229 11.8125 7.75V54.25C11.8125 55.2777 12.2273 56.2633 12.9658 56.99C13.7042 57.7167 14.7057 58.125 15.75 58.125H47.25C48.2943 58.125 49.2958 57.7167 50.0342 56.99C50.7727 56.2633 51.1875 55.2777 51.1875 54.25V7.75C51.1875 6.72229 50.7727 5.73666 50.0342 5.00996C49.2958 4.28326 48.2943 3.875 47.25 3.875Z" fill="#7758D9"/> </svg>
        </div>
        <div class="newsletter__support-container grid__item--4-5">
            <h2 class="newsletter__title"><?php the_field('newsletter__title', 6); ?></h2>
            <p class="newsletter__subtitle"><?php the_field('newsletter__subtitle', 6); ?></p>
        </div>
    </div>
    <div class="newsletter__right-wrapper grid__item--4-6 grid__container grid__container--right grid__container--no-padding">
        <form class="newsletter__form form grid__item--4-6">
            <div class="newsletter__form-field-container">
                <div class="newsletter__form-field form__field">
                    <label class="newsletter__form-label form__label" for="name">Nome:</label>
                    <input class="form__field-input" type="text" id="name" name="name" placeholder="Nome*"/>
                </div>

                <div class="newsletter__form-field form__field">
                    <label class="newsletter__form-label form__label" for="email">Email:</label>
                    <input class="form__field-input" type="email" id="email" name="email" placeholder="Email*"/>
                </div>
            </div>

            <p class="newsletter__form-declaration"><?php the_field('newsletter__form-declaration', 6); ?></p>

            <span class="form__error-msg"></span>

            <button class="newsletter__form-submit form__submit button button--primary" name="submit">
                <p class="newsletter__form-submit-text">Inscrever email</p>
            </button>
        </form>
    </div>
</section>