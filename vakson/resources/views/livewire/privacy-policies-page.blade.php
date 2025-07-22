<div>
    <div style="height: 100px;">&nbsp;</div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col" style="color: #fff">
                    {!! str($data['content'])->markdown()->sanitizeHtml() !!}
                </div>
            </div>
        </div>
    </section>
</div>
