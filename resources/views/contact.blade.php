<section class="section contact-me" data-section="section4">
    <div class="container">
      <div class="section-heading">
        <h2>Contact Me</h2>
        <div class="line-dec"></div>
        {{-- <span
          >Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
          efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
          sit amet, consectetur adipiscing elit.</span> --}}

          <span>
            You can connect with me, by filling the details on the below form. I will get in touch with you soon.
          </span>
      </div>
      <div class="row">
        <div class="right-content">
          <div class="container">
            @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
            @endif
            <form id="contact" action="{{ route('contact') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required=""
                    />
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your email..."
                      required=""
                    />
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required=""
                    />
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control"  id="message" placeholder="Your message..." required=""
                    ></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">
                      Send Message
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>