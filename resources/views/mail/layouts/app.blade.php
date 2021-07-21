@include('mail.layouts.styles')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Main Styles -->
    @yield('styles')
</head>

<body style="margin: 0; padding: 0;">
    <!-- Content -->
    <div style="font-size:0px;font-color:#ffffff;opacity:0;visibility:hidden;width:0;height:0;display:none;"> @yield('title') </div>
	<table cellpadding="0" cellspacing="0" width="100%" bgcolor="#222222">
        <tr>
            <td>
                <table class="main table-600" cellpadding="0" cellspacing="0" width="600" align="center">
                    <tr>
                        <td height="30" width="600"></td>
                    </tr>
                    <tr>
                        <td class="content" bgcolor="#222222" style="padding-top: 20px; padding-bottom: 50px; box-shadow: 0px 5px 10px -2px #000000;">
                            <table class="table-480" cellpadding="0" cellspacing="0" width="480" align="center">
                                <tr>
                                    <td class="logo" align="center">
                                        <a href="{{ Route('index') }}" title="" target="_blank">
                                            <img width="150" src="{{ Route('index') }}/img/logo-png.png" alt="logo" style="margin-top: 20px; margin-bottom: 20px;" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="title" align="center">
                                        <h1 style="font-size: 32px; color: #FAF0E6; padding-bottom: 20px;">
                                            @yield('title')
                                        </h1>
                                    </td>
                                </tr>
                                @yield('content')
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td height="30" width="600"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>