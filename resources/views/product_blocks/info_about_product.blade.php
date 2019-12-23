<div class="row">
    <div class="col-4">
        <ul>
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                   aria-selected="true">Home</a>
            </li>
        </ul>
    </div>
    <div class="col-4">
        <ul>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                   aria-controls="profile"
                   aria-selected="false">Profile</a>
            </li>
        </ul>
    </div>
    <div class="col-4">
        <ul>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                   aria-controls="contact"
                   aria-selected="false">Contact</a>
            </li>
        </ul>
    </div>
    <div class="col-12">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                    {{ $product->description }}
                </p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p>
                    {{ $product->descrip }}
                </p>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <p>
                   Доставка
                </p>

            </div>
        </div>
    </div>
</div>
