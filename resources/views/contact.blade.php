@extends('layouts.default')


@section('content')
<section>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <h2>Contact Details</h2>
                </div>
                <div class="form-group">
                    <p><b>Lars Schweikardt</b></p>
                    <p>Alemannenstrasse 11</p>
                    <p>78467 Konstanz</p>
                    <a href="mailto:schweikardt-lars@hotmail.de">E-mail me</a>
                    <br>
                    <br>
                    <p><b>Manuel Müller</b></p>
                    <p>Schottenstrasse 71B</p>
                    <p>78462 Konstanz</p>
                    <a href="mailto: maschmusemail@email.de">E-mail me</a>

                </div>
            </div>

            <form>
                <div class="col-lg-6 col-sm-6 col-xs-12 ">
                    <h2>Contact Formular</h2>
                    <div class="form-group">
                        <label for="username">Name:     </label>
                        <input type="text" id="username">
                    </div>
                </div>


                <div class="col-lg-6 col-sm-6 col-xs-12 ">
                    <div class="form-group">
                        <label for="useremail">E-Mail: </label>
                        <input type="email" id="useremail">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-xs-12 ">
                    <div class="form-group">
                        <label for="descriptionTextarea">Your message:</label>
                        <textarea class="form-control" id="descriptionTextarea"
                                  rows="3"></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="form-group">
                        <button type="submit" class="btn">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</section>

@endsection