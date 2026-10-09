import { createRequire } from 'node:module';
const require = createRequire(import.meta.url);
const { test, expect } = require('playwright/test');

test.use({
    launchOptions: {
        executablePath: 'C:\\Users\\raymaizing\\AppData\\Local\\ms-playwright\\chromium-1243\\chrome-win64\\chrome.exe',
    },
});

test('ARAY opens, responds, and fits the desktop viewport', async ({ page }) => {
    await page.setViewportSize({ width: 1440, height: 900 });
    await page.goto('http://127.0.0.1:8767/', { waitUntil: 'networkidle' });
    await expect(page.locator('#arayLauncher')).toBeVisible();
    await page.locator('#arayLauncher').click();
    await expect(page.locator('#arayPanel')).toHaveAttribute('aria-hidden', 'false');
    await page.waitForTimeout(450);

    const panelBox = await page.locator('#arayPanel').boundingBox();
    expect(panelBox.x).toBeGreaterThanOrEqual(0);
    expect(panelBox.x + panelBox.width).toBeLessThanOrEqual(1440);

    await page.screenshot({ path: 'storage/app/aray-chat-desktop.png', fullPage: false });
    await page.locator('#arayInput').fill('Apa prinsip utama sebelum membangun sistem AI untuk bisnis?');
    await page.locator('#arayForm').evaluate((form) => form.requestSubmit());
    await expect(page.locator('.aray-message[data-loading="true"]')).toHaveCount(0, { timeout: 90000 });
    await expect(page.locator('.aray-message--assistant')).toHaveCount(1);
    await expect(page.locator('.aray-message--assistant .aray-message-bubble')).not.toBeEmpty();
    await page.screenshot({ path: 'storage/app/aray-chat-response.png', fullPage: false });
});

test('ARAY panel fits a mobile viewport without horizontal overflow', async ({ page }) => {
    await page.setViewportSize({ width: 390, height: 844 });
    await page.goto('http://127.0.0.1:8767/', { waitUntil: 'networkidle' });
    await page.locator('#arayLauncher').click();
    await expect(page.locator('#arayPanel')).toHaveAttribute('aria-hidden', 'false');
    await page.waitForTimeout(450);

    const metrics = await page.evaluate(() => ({
        documentWidth: document.documentElement.scrollWidth,
        viewportWidth: document.documentElement.clientWidth,
        panel: document.getElementById('arayPanel').getBoundingClientRect().toJSON(),
    }));
    expect(metrics.documentWidth).toBe(metrics.viewportWidth);
    expect(metrics.panel.left).toBeGreaterThanOrEqual(0);
    expect(metrics.panel.right).toBeLessThanOrEqual(390);
    await page.screenshot({ path: 'storage/app/aray-chat-mobile.png', fullPage: false });
});
