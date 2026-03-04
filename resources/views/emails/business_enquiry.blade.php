<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Business Enquiry</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f9; font-family:Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f9; padding:30px 0;">
<tr>
<td align="center">

<table width="700" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.05);">

    <!-- Header -->
    <tr>
        <td style="background:#4f46e5; padding:25px; text-align:center; color:white;">
            <h2 style="margin:0;">New Business Enquiry</h2>
            <p style="margin:5px 0 0; font-size:14px;">A new client has submitted an enquiry</p>
        </td>
    </tr>

    <!-- Content -->
    <tr>
        <td style="padding:30px;">

            <!-- Basic Info -->
            <h3 style="margin-top:0; color:#4f46e5;">Basic Information</h3>
            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">
                <tr style="background:#f9fafb;">
                    <td><strong>Website Plan</strong></td>
                    <td>{{ $enquiry->website_plan }}</td>
                </tr>
                <tr>
                    <td><strong>Brand Name</strong></td>
                    <td>{{ $enquiry->brand_name }}</td>
                </tr>
                <tr style="background:#f9fafb;">
                    <td><strong>Business Category</strong></td>
                    <td>{{ $enquiry->business_category }}</td>
                </tr>
                <tr>
                    <td><strong>Contact Number</strong></td>
                    <td>{{ $enquiry->contact_number }}</td>
                </tr>
                <tr style="background:#f9fafb;">
                    <td><strong>Email</strong></td>
                    <td>{{ $enquiry->email }}</td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td>{{ $enquiry->address }}</td>
                </tr>
            </table>

            <br>

            <!-- Social Links -->
            <h3 style="color:#4f46e5;">Social Links</h3>
            <p><strong>Facebook:</strong> {{ $enquiry->facebook_link ?? 'N/A' }}</p>
            <p><strong>Instagram:</strong> {{ $enquiry->instagram_link ?? 'N/A' }}</p>
            <p><strong>Google My Business:</strong> {{ $enquiry->gmb_link ?? 'N/A' }}</p>

            <hr style="margin:25px 0; border:none; border-top:1px solid #eee;">

            <!-- Selected Pages -->
            <h3 style="color:#4f46e5;">Selected Pages</h3>
            @if($enquiry->pages)
                <ul>
                    @foreach($enquiry->pages as $page)
                        <li>{{ $page }}</li>
                    @endforeach
                </ul>
            @else
                <p>N/A</p>
            @endif

            <hr style="margin:25px 0; border:none; border-top:1px solid #eee;">

            <!-- Business Details -->
            <h3 style="color:#4f46e5;">Business Details</h3>
            <p><strong>About Business:</strong><br>{{ $enquiry->about_business }}</p>
            <p><strong>About Products:</strong><br>{{ $enquiry->about_products }}</p>
            <p><strong>Highlights:</strong><br>{{ $enquiry->highlights }}</p>

            <hr style="margin:25px 0; border:none; border-top:1px solid #eee;">

            <!-- Vision -->
            <h3 style="color:#4f46e5;">Strengths & Vision</h3>
            <p><strong>Why Choose Us:</strong><br>{{ $enquiry->why_choose_us }}</p>
            <p><strong>Testimonials:</strong><br>{{ $enquiry->testimonials }}</p>
            <p><strong>Mission:</strong><br>{{ $enquiry->mission }}</p>
            <p><strong>Vision:</strong><br>{{ $enquiry->vision }}</p>
            <p><strong>Our Strengths:</strong><br>{{ $enquiry->our_strengths }}</p>

            <hr style="margin:25px 0; border:none; border-top:1px solid #eee;">

            <!-- Uploaded Files -->
            <h3 style="color:#4f46e5;">Uploaded Files</h3>

            @if(!empty($logoCid))
                <p><strong>Logo Preview:</strong></p>
                <img src="{{ $logoCid }}" width="200" style="border:1px solid #ddd; padding:5px; margin-bottom:15px;">
            @endif

            @if(!empty($photoCids))
                <p><strong>Photos:</strong></p>
                @foreach($photoCids as $cid)
                    <img src="{{ $cid }}" width="150" style="margin:5px; border:1px solid #ddd; padding:5px;">
                @endforeach
            @endif

        </td>
    </tr>

    <!-- Footer -->
    <tr>
        <td style="background:#f9fafb; text-align:center; padding:15px; font-size:12px; color:#888;">
            Submitted at: {{ $enquiry->created_at }} <br>
            © {{ date('Y') }} OnTimeWebs
        </td>
    </tr>

</table>

</td>
</tr>
</table>

</body>
</html>