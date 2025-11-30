<?php
include 'layout/head.php'
?>
<!-- ========== Navbar start ========== -->
<?php include 'layout/navBar.php' ?>
<!-- ========== Nav bar end ========== -->

<section
  class="bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 py-16">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <h1 class="text-5xl font-display font-bold text-base-content mb-4">
      Get in Touch
    </h1>
    <p class="text-xl text-base-content/70 max-w-2xl mx-auto">
      Have questions or feedback? We'd love to hear from you
    </p>
  </div>
</section>
<section class="py-20 bg-base-100 flex-1">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <div>
        <h2 class="text-3xl font-display font-bold text-base-content mb-6">
          Contact Information
        </h2>
        <p class="text-base-content/70 leading-relaxed mb-8">
          Whether you have a question about our content, want to contribute
          as a writer, or just want to say hello, our team is ready to
          answer all your questions.
        </p>
        <div class="space-y-6">
          <div class="flex gap-4 items-start">
            <div
              class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary flex-shrink-0">
              <i class="ri-mail-line text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold text-base-content mb-1">Email</h3>
              <p class="text-base-content/70">hello@bloghub.com</p>
              <p class="text-base-content/70">support@bloghub.com</p>
            </div>
          </div>
          <div class="flex gap-4 items-start">
            <div
              class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary flex-shrink-0">
              <i class="ri-phone-line text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold text-base-content mb-1">Phone</h3>
              <p class="text-base-content/70">+1 (555) 123-4567</p>
              <p class="text-base-content/70 text-sm">
                Mon-Fri, 9am-6pm EST
              </p>
            </div>
          </div>
          <div class="flex gap-4 items-start">
            <div
              class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary flex-shrink-0">
              <i class="ri-map-pin-line text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold text-base-content mb-1">Office</h3>
              <p class="text-base-content/70">123 Blog Street, Suite 456</p>
              <p class="text-base-content/70">San Francisco, CA 94102</p>
            </div>
          </div>
          <div class="flex gap-4 items-start">
            <div
              class="w-12 h-12 flex items-center justify-center rounded-full bg-primary/10 text-primary flex-shrink-0">
              <i class="ri-global-line text-xl"></i>
            </div>
            <div>
              <h3 class="font-semibold text-base-content mb-1">
                Social Media
              </h3>
              <div class="flex gap-2 mt-2">
                <a
                  href="#"
                  class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-facebook-fill"></i></a><a
                  href="#"
                  class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-twitter-x-line"></i></a><a
                  href="#"
                  class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-instagram-line"></i></a><a
                  href="#"
                  class="btn btn-circle btn-sm btn-ghost hover:btn-primary"><i class="ri-linkedin-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-8 rounded-2xl overflow-hidden shadow-lg h-64">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0977203194243!2d-122.41941492347447!3d37.77492971267033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c6c8f4459%3A0xb10ed6d9b5050fa5!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1704067200000!5m2!1sen!2s"
            width="100%"
            height="100%"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Office Location"
            style="border: 0px"></iframe>
        </div>
      </div>
      <div>
        <div class="card bg-base-100 shadow-2xl">
          <div class="card-body">
            <h2 class="card-title text-2xl font-display mb-4">
              Send us a Message
            </h2>
            <form
              class="space-y-4"
              data-readdy-form="true"
              id="contact-form">
              <div class="form-control">
                <label class="label"><span class="label-text font-medium">Your Name</span></label><input
                  placeholder="John Doe"
                  class="input input-bordered"
                  required=""
                  type="text"
                  name="name" />
              </div>
              <div class="form-control">
                <label class="label"><span class="label-text font-medium">Email Address</span></label><input
                  placeholder="john@example.com"
                  class="input input-bordered"
                  required=""
                  type="email"
                  name="email" />
              </div>
              <div class="form-control">
                <label class="label"><span class="label-text font-medium">Subject</span></label><input
                  placeholder="How can we help?"
                  class="input input-bordered"
                  required=""
                  type="text"
                  name="subject" />
              </div>
              <div class="form-control">
                <label class="label"><span class="label-text font-medium">Message</span></label><textarea
                  name="message"
                  class="textarea textarea-bordered h-32"
                  placeholder="Tell us more about your inquiry..."
                  maxlength="500"
                  required=""></textarea><label class="label"><span class="label-text-alt text-base-content/60">Maximum 500 characters</span></label>
              </div>
              <div class="form-control">
                <label class="label cursor-pointer justify-start gap-3"><input
                    class="checkbox checkbox-primary"
                    type="checkbox"
                    name="newsletter" /><span class="label-text">Subscribe to our newsletter</span></label>
              </div>
              <button
                type="submit"
                class="btn btn-primary w-full whitespace-nowrap">
                <i class="ri-send-plane-fill"></i>Send Message
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========  Foot start ========== -->
<?php include 'layout/footer.php' ?>
<!-- ==========  Foot start ========== -->