<?php
/**
 * Forums Loop - Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

defined( 'ABSPATH' ) || exit;

?>
<ul id="bbp-forum-<?php bbp_forum_id(); ?>" <?php bbp_forum_class(); ?>>
	<li class="bbp-forum-info">
		<?php if ( bbp_is_user_home() && bbp_is_subscriptions() ) { ?>
			<span class="bbp-row-actions">
				<?php
				do_action( 'bbp_theme_before_forum_subscription_action' );

				bbp_forum_subscription_link(
					array(
						'before'      => '',
						'subscribe'   => '+',
						'unsubscribe' => '&times;',
					)
				);

				do_action( 'bbp_theme_after_forum_subscription_action' );
				?>
			</span>
			<?php
		}

		do_action( 'bbp_theme_before_forum_title' );

		?>
		<a class="bbp-forum-title" href="<?php bbp_forum_permalink(); ?>"><?php bbp_forum_title(); ?></a>
		<?php

		do_action( 'bbp_theme_after_forum_title' );
		do_action( 'bbp_theme_before_forum_description' );

		?>
		<div class="bbp-forum-content"><?php bbp_forum_content(); ?></div>
		<?php

		do_action( 'bbp_theme_after_forum_description' );
		do_action( 'bbp_theme_before_forum_sub_forums' );

		bbp_list_forums();

		do_action( 'bbp_theme_after_forum_sub_forums' );

		bbp_forum_row_actions();

		?>
	</li>
	<li class="bbp-forum-topic-count"><?php bbp_forum_topic_count(); ?></li>
	<li class="bbp-forum-reply-count"><?php bbp_show_lead_topic() ? bbp_forum_reply_count() : bbp_forum_post_count(); ?></li>
	<li class="bbp-forum-freshness">
		<?php

		do_action( 'bbp_theme_before_forum_freshness_link' );

		bbp_forum_freshness_link();

		do_action( 'bbp_theme_after_forum_freshness_link' );

		?>
		<p class="bbp-topic-meta">
			<?php do_action( 'bbp_theme_before_topic_author' ); ?>

			<span class="bbp-topic-freshness-author">
				<?php

				bbp_author_link(
					array(
						'post_id' => bbp_get_forum_last_active_id(),
						'size'    => 14,
					)
				);

				?>
			</span>

			<?php do_action( 'bbp_theme_after_topic_author' ); ?>
		</p>
	</li>
</ul><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->
