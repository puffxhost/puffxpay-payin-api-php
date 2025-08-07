<h1>💳 PuffxPay - PayIN API PHP Integration</h1>

<p>
  <strong>PuffxPay</strong> provides a simple and secure PHP integration for the <a href="https://pay.x-server.in" target="_blank">PayIN Gateway</a> by X-Server.in.
  It enables merchants and developers to accept instant online payments via a clean and efficient API wrapper.
</p>

<h2>🚀 Features</h2>
<ul>
  <li>🧾 Create PayIN payment orders</li>
  <li>🔍 Check payment or transaction status</li>
  <li>📬 Webhook listener for real-time status updates</li>
  <li>⚙️ Lightweight and easy to integrate</li>
</ul>

<h2>🛠️ Requirements</h2>
<ul>
  <li>PHP 5.6 or higher</li>
  <li>cURL must be enabled</li>
  <li>Active PayIN account and API token</li>
</ul>

<h2>📁 Folder Structure</h2>
<pre>
puffxpay-payin-api-php/
├── config.php
├── PayinAPI.php
├── example/
│   ├── create_order.php
│   ├── check_status.php
│   └── webhook_listener.php
└── LICENSE
└── README.md
</pre>

<h2>⚙️ Quick Start</h2>
<ol>
  <li>Clone this repository or download the ZIP</li>
  <li>Edit <code>config.php</code> and replace <code>YOUR_USER_TOKEN</code> with your API key</li>
  <li>Run any script inside the <code>example/</code> folder to test</li>
</ol>

<h2>📦 Sample Code</h2>

<h3>✅ Create Order</h3>
<pre><code>
$response = PayinAPI::createOrder(
    '8145344963',
    '1.00',
    'ORDER' . time(),
    'https://your-redirect-url.com',
    'TestRemark1',
    'TestRemark2',
    1
);
</code></pre>

<h3>✅ Check Order Status</h3>
<pre><code>
$response = PayinAPI::checkStatus('YOUR_ORDER_ID');
</code></pre>

<h3>✅ Webhook Listener (POST)</h3>
<pre><code>
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'status' => $_POST['status'],
        'order_id' => $_POST['order_id'],
        'amount' => $_POST['amount']
    ];
    // Log or process $data
}
</code></pre>

<hr>

<h2>🛟 Support & Contact</h2>
<p>
  Need help or want to report an issue?<br>
  🌐 <strong>Website:</strong> <a href="https://puffxhost.com/contact" target="_blank">https://puffxhost.com/contact</a><br>
  📧 <strong>Email:</strong> <a href="mailto:support@puffxhost.in">support@puffxhost.in</a><br>
  📞 <strong>WhatsApp:</strong> <a href="https://wa.me/918602967573" target="_blank">+91 8602967573</a>
</p>

<h2>📜 License</h2>
<p>
  This project is licensed under the <strong>MIT License</strong>.<br>
  See the <code>LICENSE.txt</code> file for full details.
</p>

<h2>🙌 Contributing</h2>
<p>
  Contributions are welcome!<br>
  Fork the repo, make your changes, and submit a pull request.<br>
  Let’s build something great together!
</p>

<h2>⭐️ Give a Star</h2>
<p>
  If you found this module useful, please consider giving it a ⭐️ on GitHub to support its development.
</p>

<h2>🔗 About</h2>
<p>
  Accept secure and seamless payment requests using the PayIN gateway with this official PuffxPay PHP integration.<br>
  Built for performance, clean code, and quick deployment in any project.
</p>

<h2>🧠 Developed By</h2>
<p>
  <strong>Nitin Mehta</strong><br>
  🌐 Official Site: <a href="https://puffxhost.com" target="_blank">https://puffxhost.com</a>
</p>

<hr>
<p align="center">
  Developed with ❤️ by <strong>PuffxPay</strong>
</p>
