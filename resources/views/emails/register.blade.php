@extends('emails.layouts.default')

@section('content')

<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff"
   style="border-radius: 4px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
   <tbody>
      <tr>
         <td height="40"></td>
      </tr>
      <tr style="font-family: -apple-system,BlinkMacSystemFont,&#39;Segoe UI&#39;,&#39;Roboto&#39;,&#39;Oxygen&#39;,&#39;Ubuntu&#39;,&#39;Cantarell&#39;,&#39;Fira Sans&#39;,&#39;Droid Sans&#39;,&#39;Helvetica Neue&#39;,sans-serif; color:#4E5C6E; font-size:14px; line-height:20px; margin-top:20px;">
         <td class="content" colspan="2" valign="top" align="center" style="padding-left:90px; padding-right:90px;">
            <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
               <tbody>
                  <tr>
                     <td align="center">
                        <div style="font-size: 32px; line-height: 32px; font-weight: 500; margin-left: 20px; margin-right: 20px; margin-bottom: 25px;">Olá, <p style="font-size: 32px; color: blue">{{$name}}</p></div>
                        <div style="font-size: 22px; line-height: 32px; font-weight: 500; margin-left: 20px; margin-right: 20px; margin-bottom: 25px;">O documento referente ao curso: <br />
                            <p style="font-size: 32px; color: gray">{{$course_name}}</p>
                        </div>
                        <p style="font-size: 22px;">Foi assinado</p>
                        <!-- <p style="font-size: 14px; color:#9BA6B2;">Para começar a utilizar a sua conta,<br />confirme o seu e-mail no botão abaixo.</p> -->
                     </td>
                  </tr>
                  <tr>
                     <td height="10">&nbsp;</td>
                  </tr>

               </tbody>
            </table>
         </td>
      </tr>
      <tr>
         <td height="60"></td>
      </tr>
   </tbody>
</table>

@endsection
