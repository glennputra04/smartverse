<div id="loadingOverlay" class="loading-overlay" aria-live="polite" aria-hidden="true">
	<div class="loading-circle-wrap" role="status" aria-label="Loading">
		<span class="loading-ring ring-main"></span>
		<span class="loading-ring ring-pulse"></span>
		<span class="loading-dot"></span>
	</div>
	<p class="loading-text mb-0">Please wait...</p>
</div>

<style>
	.loading-overlay {
		position: fixed;
		inset: 0;
		display: none;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		gap: 14px;
		background: rgba(9, 31, 66, 0.28);
		backdrop-filter: blur(3px);
		z-index: 9999;
	}

	.loading-overlay.active {
		display: flex;
		animation: fade-in-overlay 0.25s ease;
	}

	.loading-circle-wrap {
		position: relative;
		width: 86px;
		height: 86px;
		display: grid;
		place-items: center;
	}

	.loading-ring {
		position: absolute;
		border-radius: 50%;
		border-style: solid;
		border-color: transparent;
	}

	.ring-main {
		width: 86px;
		height: 86px;
		border-width: 6px;
		border-top-color: #0d6efd;
		border-right-color: #49a4ff;
		animation: spin-main 0.9s linear infinite;
		filter: drop-shadow(0 0 8px rgba(13, 110, 253, 0.55));
	}

	.ring-pulse {
		width: 58px;
		height: 58px;
		border-width: 5px;
		border-left-color: #63b3ff;
		border-bottom-color: #1f7bff;
		animation: spin-reverse 1.2s linear infinite, pulse-ring 1.4s ease-in-out infinite;
	}

	.loading-dot {
		width: 12px;
		height: 12px;
		border-radius: 50%;
		background: #e9f4ff;
		box-shadow: 0 0 15px rgba(13, 110, 253, 0.95);
		animation: pulse-dot 1.1s ease-in-out infinite;
	}

	.loading-text {
		color: #ffffff;
		font-weight: 600;
		letter-spacing: 0.3px;
	}

	@keyframes spin-main {
		100% {
			transform: rotate(360deg);
		}
	}

	@keyframes spin-reverse {
		100% {
			transform: rotate(-360deg);
		}
	}

	@keyframes pulse-ring {
		0%,
		100% {
			transform: scale(0.95);
			opacity: 0.75;
		}

		50% {
			transform: scale(1.06);
			opacity: 1;
		}
	}

	@keyframes pulse-dot {
		0%,
		100% {
			transform: scale(0.8);
			opacity: 0.8;
		}

		50% {
			transform: scale(1.2);
			opacity: 1;
		}
	}

	@keyframes fade-in-overlay {
		from {
			opacity: 0;
		}

		to {
			opacity: 1;
		}
	}
</style>
