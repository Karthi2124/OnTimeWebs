<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.5;
            color: #2d3748;
            background-color: #f7fafc;
            margin: 0;
            padding: 30px 15px;
        }
        
        .container {
            max-width: 560px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 35px -8px rgba(0, 0, 0, 0.1), 0 5px 10px -5px rgba(0, 0, 0, 0.02);
        }
        
        .header {
            background: linear-gradient(145deg, #1a202c, #2d3748);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        
        .header h1 {
            margin: 0;
            font-size: 26px;
            font-weight: 600;
            letter-spacing: -0.3px;
        }
        
        .header p {
            margin: 10px 0 0;
            opacity: 0.8;
            font-size: 15px;
        }
        
        .content {
            padding: 35px 30px;
        }
        
        .field {
            margin-bottom: 25px;
        }
        
        .field-label {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #718096;
            margin-bottom: 6px;
        }
        
        .field-value {
            font-size: 18px;
            font-weight: 500;
            color: #1a202c;
            padding-bottom: 10px;
            border-bottom: 1px solid #edf2f7;
        }
        
        .field-value a {
            color: #4299e1;
            text-decoration: none;
        }
        
        .field-value a:hover {
            text-decoration: underline;
        }
        
        .plan-tag {
            display: inline-block;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 8px 20px;
            border-radius: 100px;
            font-size: 14px;
            font-weight: 600;
            margin: 5px 0 15px;
        }
        
        .message-box {
            background-color: #f8fafd;
            border-radius: 12px;
            padding: 20px;
            margin-top: 25px;
            border: 1px solid #e9edf3;
        }
        
        .message-box p {
            margin: 0;
            font-size: 16px;
            line-height: 1.7;
            color: #2d3748;
        }
        
        .footer {
            padding: 25px 30px;
            background-color: #f8fafd;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            color: #718096;
            font-size: 13px;
        }
        
        .badge {
            background-color: #ebf4ff;
            color: #4299e1;
            padding: 3px 8px;
            border-radius: 20px;
            font-size: 12px;
            margin-left: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Message</h1>
            <p>You've received a new inquiry from your website</p>
        </div>
        
        <div class="content">
            <div class="field">
                <div class="field-label">Name</div>
                <div class="field-value">{{ $data['name'] }}</div>
            </div>
            
            <div class="field">
                <div class="field-label">Email Address</div>
                <div class="field-value">
                    <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
                </div>
            </div>
            
            <div class="field">
                <div class="field-label">Phone Number</div>
                <div class="field-value">
                    <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a>
                </div>
            </div>
            
            @if(!empty($data['plan']))
            <div style="text-align: left; margin: 20px 0 10px;">
                <span class="plan-tag">Interested in: {{ $data['plan'] }}</span>
            </div>
            @endif
            
            <div class="field">
                <div class="field-label">Message</div>
                <div class="message-box">
                    <p>{{ $data['message'] }}</p>
                </div>
            </div>
            
            <div style="text-align: center; margin: 35px 0 10px;">
                <a href="mailto:{{ $data['email'] }}?subject=Re: Your inquiry" 
                   style="display: inline-block; background: linear-gradient(135deg, #667eea, #764ba2); color: white; text-decoration: none; padding: 12px 30px; border-radius: 50px; font-weight: 600; margin: 0 5px;">
                    Reply via Email
                </a>
                <a href="tel:{{ $data['phone'] }}" 
                   style="display: inline-block; background: #48bb78; color: white; text-decoration: none; padding: 12px 30px; border-radius: 50px; font-weight: 600; margin: 0 5px;">
                    Call Now
                </a>
            </div>
        </div>
        
        <div class="footer">
            <p style="margin: 0 0 5px;">This message was sent from your website contact form</p>
            <p style="margin: 0; color: #a0aec0;">{{ date('Y') }} OnTimeWebs • All rights reserved</p>
        </div>
    </div>
</body>
</html>