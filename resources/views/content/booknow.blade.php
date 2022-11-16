@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title">Book Room</h5>
                    <div class="container">
                        <div class="row">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Name</span>
                                            <input class="form-control" type="text" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email" placeholder="Enter your email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Phone</span>
                                    <input class="form-control" type="tel" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Pickup Location</span>
                                    <input class="form-control" type="text" placeholder="Enter ZIP/Location">
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Destination</span>
                                    <input class="form-control" type="text" placeholder="Enter ZIP/Location">
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <span class="form-label">Pickup Date</span>
                                            <input class="form-control" type="date" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">Hour</span>
                                                    <select class="form-control">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">Min</span>
                                                    <select class="form-control">
                                                        <option>05</option>
                                                        <option>10</option>
                                                        <option>15</option>
                                                        <option>20</option>
                                                        <option>25</option>
                                                        <option>30</option>
                                                        <option>35</option>
                                                        <option>40</option>
                                                        <option>45</option>
                                                        <option>50</option>
                                                        <option>55</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">AM/PM</span>
                                                    <select class="form-control">
                                                        <option>AM</option>
                                                        <option>PM</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3 mt-3">
                                    <a href="" class="btn btn-primary me-md-2" type="button">Book Now</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection