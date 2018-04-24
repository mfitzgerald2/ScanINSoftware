UPDATE wpgf_options SET option_value = replace(option_value, 'http://srts.mfitz.net', 'http://localhost/') WHERE option_name = 'home' OR option_name = 'siteurl';
UPDATE wpgf_posts SET post_content = replace(post_content, 'http://srts.mfitz.net', 'http://localhost/');
UPDATE wpgf_postmeta SET meta_value = replace(meta_value,'http://srts.mfitz.net','http://localhost/');