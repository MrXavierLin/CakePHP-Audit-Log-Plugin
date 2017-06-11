<?php
if(!Configure::check('AuditLog.data_source')) {
    Configure::write('AuditLog.data_source', 'default');
}