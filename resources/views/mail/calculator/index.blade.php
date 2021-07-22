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
                        Тип виробу:
                    </h3>
                </td>
                <td class="input" align="left">
                    <p style="font-size: 14px; padding-left: 90px;">
                        {{ $type }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="item" align="left">
                    <h3 class="text" style="font-size: 16px;">
                        Ширина в см:
                    </h3>
                </td>
                <td class="input" align="left">
                    <p style="font-size: 14px; padding-left: 90px;">
                        {{ $width }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="item" align="left">
                    <h3 class="text" style="font-size: 16px;">
                        Висота в см:
                    </h3>
                </td>
                <td class="input" align="left">
                    <p style="font-size: 14px; padding-left: 90px;">
                        {{ $height }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="item" align="left">
                    <h3 class="text" style="font-size: 16px;">
                        Шрифт:
                    </h3>
                </td>
                <td class="input" align="left">
                    <p style="font-size: 14px; padding-left: 90px;">
                        {{ $font }}
                    </p>
                </td>
            </tr>
            <tr>
                <td class="item" align="left">
                    <h3 class="text" style="font-size: 16px;">
                        Місце:
                    </h3>
                </td>
                <td class="input" align="left">
                    <p style="font-size: 14px; padding-left: 90px;">
                        {{ $place }}
                    </p>
                </td>
            </tr>
        </table>
    </td>
</tr>
@endsection