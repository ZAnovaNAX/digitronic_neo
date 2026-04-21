import { defineCollection, z } from 'astro:content';
import { glob } from 'astro/loaders';

const pages = defineCollection({
  loader: glob({ pattern: "**/*.md", base: "./src/content/pages" }),
  schema: z.object({
    title: z.string(),
    description: z.string().optional(),
    hero_title: z.string().optional(),
    hero_image: z.string().optional(),
    features: z.array(z.object({
      title: z.string(),
      text: z.string()
    })).optional(),
    programs: z.array(z.object({
      name: z.string(),
      version: z.string(),
      link: z.string()
    })).optional(),
  }),
});

const products = defineCollection({
  loader: glob({ pattern: "**/*.md", base: "./src/content/products" }),
  schema: z.object({
    title: z.string(),
    category: z.string(),
    image: z.string().optional(),
    price: z.string().optional(),
  }),
});

export const collections = {
  pages,
  products
};
