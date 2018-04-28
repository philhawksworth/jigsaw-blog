<footer class="footer is-primary">
    <div class="container has-text-centered">
        <div class="columns">
            <div class="column is-9 has-text-left-tablet">
                <p>All content copyright {{ $page->site->owner->name }} &copy; <span v-text="currentYear"></span>. All rights reserved.</p>
                <p>Built with Jigsaw, hosted on Netlify.</p>
            </div>
            <div class="column is-3 has-text-right-tablet">
                <a href="{{ $page->site->owner->twitter }}" target="_blank">
                    <fa icon="twitter" stack="square" icon-class="has-text-primary" stack-class="has-text-white"></fa>
                </a>
                <a href="{{ $page->site->owner->github }}" target="_blank">
                    <fa icon="github" stack="square" icon-class="has-text-primary" stack-class="has-text-white"></fa>
                </a>
            </div>
        </div>
    </div>
</footer>
