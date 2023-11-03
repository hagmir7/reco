import './bootstrap';
import Alpine from 'alpinejs';

import intersect from '@alpinejs/intersect'

Alpine.plugin(intersect)

window.Alpine = Alpine;

window.Alpine.start();
