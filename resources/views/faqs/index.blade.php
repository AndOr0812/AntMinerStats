@extends('layouts.app')

@section('content')
    <div class="content">
        {{-- @include('adminlte-templates::common.errors') --}}
        <div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-cogs"></i>
                <h2 class="box-title">Faq</h2>
            </div>
            <div class="box-body">
                    <h3>Is it safe to grant access to API of your antminer to our monitoring service?</h3>
                    <p class="lead">
                        All latest firmwares provide only read access by default.
                        That means, that we can read all data from your harware, but we cannot write or change any of your settings.
                    </p>
                    <p class="lead">
                        However we have optional functionality of remote restart miners via API.
                        And to enable this functionality you have to make some changes to cgminer.conf via SSH.
                        To make it more safe, you can setup your antminer to allow write acceess ONLY from IP address of our service.
                    </p>

                    <h3>Is there an integration guide for PHP frameworks such as Yii or Symfony?</h3>
                    <p class="lead">Short answer, no. However, there are forks and tutorials around the web that provide info on how to integrate with many different frameworks. There are even versions of AdminLTE that are integrated with jQuery ajax, AngularJS and/or MVC5 ASP .NET.</p>

                    <h3>How do I get notified of new AdminLTE versions?</h3>
                    <p class="lead">The best option is to subscribe to our mailing list using the <a href="https://adminlte.io/#subscribe">subscription form on Almsaeed Studio</a>.
                        If that's not appealing to you, you may watch the <a href="https://github.com/almasaeed2010/AdminLTE">repository on Github</a> or visit <a href="https://adminlte.io">Almsaeed Studio</a> every now and then for updates and announcements.</p>
            </div>
        </div>
    </div>
@endsection
