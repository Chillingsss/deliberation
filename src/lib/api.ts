const DEFAULT_BASE =
	"https://peachpuff-alligator-715719.hostingersite.com/deliberation/api";
export const API_BASE_URL = (
	import.meta.env.VITE_API_BASE_URL || DEFAULT_BASE
).replace(/\/+$/, "");

export const apiUrl = (path: string) => `${API_BASE_URL}/routes/${path}`;
