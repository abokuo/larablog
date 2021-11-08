{!! HCaptcha::renderJs('zh-TW') !!}
    <div class="container">
        <div class="row blog">
            <div class="col-lg-12 entry">
                <h3 class="sidebar-title">聯絡表單</h3>
                <form action="/contact/add" method="post" class="reply-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="姓名" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="電子郵件"
                                required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="聯絡主題" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="聯絡訊息" required></textarea>
                    </div>
                    {!! HCaptcha::display() !!}
                    <div class="form-group mt-3 text-center"><button class="btn btn-primary" type="submit">傳送</button>
                    </div>
                </form>
            </div>

        </div>

<!-- End Contact Section -->
