@extends('mail.layouts.app')

@section('title', $title)

@section('content')
<tr>
    <td class="code-bg" bgcolor="#FAF0E6">
        <table class="form-320" cellpadding="0" cellspacing="0" width="460" align="center" style="color: #1C1C1C;">
            <tr>
                <td class="item" align="left">
                    <h3 class="text" style="font-size: 16px;">
                        Ім’я:
                    </h3>
                </td>
                <td class="input" align="left">
                    <p style="font-size: 14px; padding-left: 90px;">
                        {{ $name }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="item" align="left">
                    <h3 class="text" style="font-size: 16px;">
                        Телефон:
                    </h3>
                </td>
                <td class="input" align="left">
                    <p style="font-size: 14px; padding-left: 90px;">
                        {{ $phone }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="item" align="left">
                    <h3 class="text" style="font-size: 16px;">
                        Повідомлення:
                    </h3>
                </td>
                <td class="input" align="left">
                    <p style="font-size: 14px; padding-left: 90px;">
                        {{ $text }}
                    </p>
                </td>
            </tr>
        </table>
    </td>
</tr>
@endsection