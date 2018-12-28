@extends('admin.master')

@section('contenu')
    <div class="row">
        <div class="widget col-sm-12 col-md-2 offset-md-1 green">
           <p class="chip green white-text mt-4"><i class="material-icons large">school</i><span>Ecole</span></p>
           <p class="divider white"></p>
           <p><span>12</span></p>
        </div>
        <div class="widget col-sm-12 col-md-2 offset-md-5 teal">
            <p class="chip teal white-text mt-4"><i class="material-icons large">supervisor_account</i><span>Inspecteur</span></p>
            <p class="divider white"></p>
            <p><span>34</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 offset-md-1 piechat-section">
            <div class="col-md-4 pie-chat">
                <div class="content-top-1">
                    <div class="col-md-6 top-content">
                        <h5>Boys</h5>
                        <label>120</label>
                    </div>
                    <div class="col-md-6 top-content1">
                        <div id="demo-pie-1" class="pie-title-center" data-percent="60"> <span class="pie-value"></span> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 pie-chat">
                <div class="content-top-1">
                    <div class="col-md-6 top-content">
                        <h5>Girls</h5>
                        <label>60</label>
                    </div>
                    <div class="col-md-6 top-content1">
                        <div id="demo-pie-2" class="pie-title-center" data-percent="30"> <span class="pie-value"></span> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 pie-chat">
                <div class="content-top-1">
                    <div class="col-md-6 top-content">
                        <h5>Cards</h5>
                        <label>20</label>
                    </div>
                    <div class="col-md-6 top-content1">
                        <div id="demo-pie-3" class="pie-title-center" data-percent="10"> <span class="pie-value"></span> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@stop