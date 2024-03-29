<?php
/**
 * Mail signatures
 *
 * @package @pablorica/scss
 */

?>


    <section id = "main" class="mail-signatures">
        
        <h2>HTML mail signatures</h2> 

        <p>Coding HTML emails is complicated, especially when it comes to making them look good in Outlook. When it comes down to creating beautiful, responsive emails, Outlook will usually take those templates we worked so hard on and render them with broken links, missing pictures, and a misaligned layout.</p>
        <p>Here you are some signatures examples. They work quite well, however if they are sent from Outlook sometimes <b>unwanted spaces are inserted, especially in the GMail client</b></p>
        
        <p> The best way to create a HTML signature is building the element in a decent HTML editor, then copy the preview of the signature (copy the rendered HTML in the browser, not the code!)and paste it in a new signature in the Mail Client.
        <br> For instance, in Outlook that can be achieved in  Preferences -> Signature.</p>

        <p>&nbsp;</p>

        <h3>LCA Mail signatures </h3>
        
        <div class="test-box test-box-1">
            <iframe src="<?=BASE_URL?>/pages/iframes/mail-signatures/LCA.php" width="100%" height="100%"></iframe>
        </div>
        <p><a href="<?=BASE_URL?>/pages/iframes/mail-signatures/LCA.php" target="_blank">Open example in a new page</a></p>

        <p>&nbsp;</p>

        <h3>GRID Mail signatures </h3>


        <div class="test-box test-box-2">
            <iframe src="<?=BASE_URL?>/pages/iframes/mail-signatures/GRID.php" width="100%" height="100%"></iframe>
        </div>
        <p><a href="<?=BASE_URL?>/pages/iframes/mail-signatures/GRID.php" target="_blank">Open example in a new page</a></p>

        <p>&nbsp;</p>

        <h3>SD-ENGINEERS Mail signatures </h3>
        <p>The problem is that we can't perfectly align the logo on the left with the content on the right, because each mail client displays the text with different paddings, so the content will have different heights with different clients. However, I think I have found a solution that can fit quite well for all of them.</p>


        <div class="test-box test-box-2">
            <iframe src="<?=BASE_URL?>/pages/iframes/mail-signatures/SDENGINEERS.php" width="100%" height="100%"></iframe>
        </div>
        <p><a href="<?=BASE_URL?>/pages/iframes/mail-signatures/SDENGINEERS.php" target="_blank">Open example in a new page</a></p>
        <p>This template was uploaded to the client <a href="https://sd-engineers.com/emailtemplate/" target="_blank">server</a></p>
        <p>This is how it looks in different mail clients:</a></p>
        <table>
            <tr>
                <td style="width:33%">
                    <p>Gmail Web</a></p>
                    <img src="<?=BASE_URL?>public/img/gmail-web.png" style="width:60%;height:auto"></iframe>
                </td>
                <td style="width:33%">
                    <p>Gmail App Android</a></p>
                    <img src="<?=BASE_URL?>public/img/gmail-app-android.png" style="width:60%;height:auto"></iframe>
                </td>
                <td style="width:34%">
                    <p>Apple Mail</a></p>
                    <img src="<?=BASE_URL?>public/img/apple-mail.png" style="width:60%;height:auto"></iframe>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Outlook</a></p>
                    <img src="<?=BASE_URL?>public/img/outlook.png" style="width:60%;height:auto"></iframe>
                </td>
                <td>
                    <p>Outlook web</a></p>
                    <img src="<?=BASE_URL?>public/img/outlook_web.png" style="width:60%;height:auto"></iframe>
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
        </table>
       



        <div class="read-more">
            <h3>Read more:</h3>
            <p><a href="https://stackoverflow.com/questions/15122625/extra-space-added-to-html-e-mail-when-sent-from-outlook-to-gmail" target="_blank">Extra space added to HTML e-mail when sent from Outlook to Gmail</a></p>
            <p><a href="https://medium.com/email-design/outlook-rendering-issues-5-tips-to-ensure-your-emails-display-properly-9520b2456166" target="_blank">Outlook Rendering Issues: 5 Tips to Ensure Your Emails Display Properly</a></p>
            <p><a href="https://litmus.com/community/discussions/8758-outlook-email-signature-adding-extra-space-when-sent-to-gmail-ios" target="_blank">Outlook Email Signature adding extra space when sent to Gmail iOS</a></p>
            <p><a href="https://answers.microsoft.com/en-us/outlook_com/forum/all/does-anyone-know-where-the-signature-file-is/b65a9400-70e9-4670-a641-8f148ece5ca0" target="_blank">Does anyone know where the signature file is stored on a Mac using Outlook 2016?</a></p>
            
        </div>
        
    </section>