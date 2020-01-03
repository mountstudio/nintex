<section>
    <div class="d-flex mb-5 jus">
        <div class="col-2 px-0 mx-2">
            <div class="card py-4 px-2 text-center">
                <p class="h1 text-success">{{ $quantity }}</p>
                <p class="text-muted">покупки за последний месяц</p>
            </div>
        </div>
        <div class="col-2 px-0 mx-2">
            <div class="card py-4 px-2 text-center">
                <p class="h1 text-success">1424</p>
                <p class="text-muted">баллов</p>
            </div>
        </div>
        <div class="col-2 px-0 mx-2">
            <div class="card py-4 px-2 text-center">
                <p class="h1 text-danger">2</p>
                <p class="text-muted">оставшиеся товары</p>
            </div>
        </div>
        <div class="col-3 px-0 mx-2">
            <div class="card py-4 px-2 text-center">
                <p class="h1 text-info">{{\Carbon\Carbon::parse($users->last_login_at)->format('d/m/Y')}}</p>
                <p class="text-muted">заходили в последний раз</p>
            </div>
        </div>
        <div class="col-2 px-0 mx-2">
            <div class="card py-4 px-2 text-center">
                <p class="h1 text-info">29</p>
                <p class="text-muted"> в последний раз</p>
            </div>
        </div>
    </div>
</section>
