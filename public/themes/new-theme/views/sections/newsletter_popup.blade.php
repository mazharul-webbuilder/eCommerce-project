<div id="newsletterModal" class="modal fade">
    <div class="modal-dialog modal-newsletter">
        <div class="modal-content"  style="background-image: url({{asset('storage/newsletter_bg_image.jpg')}})">
                <div class="modal-header">
                    <h4>{{ trans('theme.help.subscribe_newsletter') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>{{ trans('theme.help.newsletter_description') }}</p>
                    <div class="footer__news-form mt-4">
                        {!! Form::open(['route' => 'newsletter.subscribe', 'class' => 'form-inline', 'id' => 'newsletteForm', 'data-toggle' => 'validator']) !!}
                        <div class="footer__news-form-box">
                            {!! Form::email('email', null, ['placeholder' => trans('theme.placeholder.email'), 'required']) !!}
                            <button type="submit">{{ trans('theme.button.subscribe') }}</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            <div class="dont-show-newsletter">
            <div class="form-check mt-3 ml-3">
                <input class="form-check-input" type="checkbox" value="" id="newsletterCheckbox">
                <label class="form-check-label" for="flexCheckDefault">
                    Don't Show Again!
                </label>
            </div>
            </div>
            <div class="footer__content-box-social mt-5">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/" target="_blank">
                            <i class="fab fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.pinterest.com/" target="_blank">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
